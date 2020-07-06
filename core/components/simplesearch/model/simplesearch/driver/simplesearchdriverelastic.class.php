<?php
/**
 * SimpleSearch
 *
 * @package simplesearch
 */
require_once __DIR__ . '/simplesearchdriver.class.php';

/**
 * ElasticSearch search driver for SimpleSearch.
 * @package simplesearch
 */
class SimpleSearchDriverElastic extends SimpleSearchDriver
{
    /** @var array An array of connection properties for our SolrClient */
    private $_connectionOptions = [];

    /** @var \Elastica\Client $var */
    public $client;
    /** @var \Elastica\Index $index */
    public $index;

    /**
     * Initialize the ElasticSearch client, and setup settings for the client.
     *
     * @return void
     */
    public function initialize()
    {
        spl_autoload_register([$this, 'autoLoad']);

        $this->_connectionOptions = [
            'url' => $this->modx->getOption('simplesearch.elastic.hostname', null, 'http://127.0.0.1') . ':' . $this->modx->getOption('simplesearch.elastic.port', null, 9200) . '/'
        ];

        try {
            $this->client = new \Elastica\Client($this->_connectionOptions);
            $this->index  = $this->client->getIndex(strtolower($this->modx->getOption('simplesearch.elastic.index', null, 'simplesearchindex')));

            if (!$this->index->exists()) {
                $indexSetup = $this->modx->getObject('modSnippet', ['name' => 'SimpleSearchElasticIndexSetup']);
                if ($indexSetup) {
                    $indexOptions = $this->modx->fromJSON($this->modx->runSnippet('SimpleSearchElasticIndexSetup'));
                } else {
                    $indexOptions = $this->defaultSetup();
                }

                $this->index->create($indexOptions, true);
            }
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Error connecting to ElasticSearch server: ' . $e->getMessage());
        }
    }

    protected function defaultSetup()
    {
        return [
            'settings' => array(
                'number_of_shards' => 5,
                'number_of_replicas' => 1,
                'analysis' => array(
                    'analyzer' => array(
                        'index' => array(
                            "type" => "custom",
                            "tokenizer" => "whitespace",
                            "filter" => array(
                                "asciifolding",
                                "lowercase",
                                "haystack_edgengram"
                            )
                        ),
                        'default_search' => array(
                            "type" => "custom",
                            "tokenizer" => "whitespace",
                            "filter" => array(
                                "asciifolding",
                                "lowercase"
                            )
                        )
                    ),
                    "filter" => array(
                        "haystack_ngram" => array(
                            "type" => "nGram"
                        ),
                        "haystack_edgengram" => array(
                            "type" => "edgeNGram"
                        )
                    )
                )
            )
        ];
    }

    public function autoLoad($class)
    {
        $file = $this->modx->getOption('simplesearch.core_path', null, $this->modx->getOption('core_path') . 'components/simplesearch/');
        $file .= 'model/simplesearch/driver/libs/' . $class . '.php';

        $file = str_replace('\\', '/', $file);

        if (file_exists($file)) {
            require_once $file;
        }
    }

    /**
     * Run the search against a sanitized query string via ElasticSearch.
     *
     * @param string $string
     * @param array $scriptProperties The scriptProperties array from the SimpleSearch snippet
     * @return array
     */
    public function search($string,array $scriptProperties = array()) {
        ini_set('display_errors', 1);
        ini_set('error_reporting', E_ALL);

        $fields = $this->modx->getOption('sisea.elastic.search_fields', null, 'pagetitle^20,introtext^10,alias^5,content^1');

        $fields = explode(',', $fields);
        $fields = array_map('trim', $fields);
        $fields = array_keys(array_flip($fields));
        $fields = array_filter($fields);

        if (empty($fields)) {
            return false;
        }

        // $query = $this->getBoolRegexpQuery($string, $fields);
        $query = $this->getMultiMatchQuery($string, $fields);


        $customFilterScore = new \Elastica\Query\FunctionScore();
        $customFilterScore->setQuery($query);


        $searchBoosts = $this->modx->getOption('sisea.elastic.search_boost', null, '');
        $searchBoosts = explode('|', $searchBoosts);
        $searchBoosts = array_map('trim', $searchBoosts);
        $searchBoosts = array_keys(array_flip($searchBoosts));
        $searchBoosts = array_filter($searchBoosts);

        $boosts = array();


        foreach ($searchBoosts as $boost) {
            $arr = array('field' => '', 'value' => '', 'boost' => 1.0);
            $field = explode('=', $boost);
            $field = array_map('trim', $field);
            $field = array_keys(array_flip($field));
            $field = array_filter($field);

            if (count($field) != 2) continue;

            $value = explode('^', $field[1]);
            $value = array_map('trim', $value);
            $value = array_keys(array_flip($value));
            $value = array_filter($value);

            if (count($value) != 2) continue;

            $arr['field'] = $field[0];
            $arr['value'] = $value[0];
            $arr['boost'] = $value[1];

            $boosts[] = $arr;
        }

        if (empty($boosts)) {
             $customFilterScore->addWeightFunction(1, new \Elastica\Query\Term(array('type' => 'document')));
        } else {
            foreach ($boosts as $boost) {
                $customFilterScore->addWeightFunction($boost['boost'], new \Elastica\Filter\Query(array($boost['field'] => $boost['value'])));
            }
        }


        /** @var \Elastica\Query $elasticaQuery */
        $elasticaQuery = new \Elastica\Query();
        $elasticaQuery->setQuery($customFilterScore);

    	/* set limit */
        $perPage = $this->modx->getOption('perPage',$scriptProperties,10);
    	if (!empty($perPage)) {
            $offset = $this->modx->getOption('start',$scriptProperties,0);
            $offsetIndex = $this->modx->getOption('offsetIndex',$scriptProperties,'sisea_offset');
            if (isset($_REQUEST[$offsetIndex])) $offset = (int)$_REQUEST[$offsetIndex];
            $elasticaQuery->setFrom($offset);
            $elasticaQuery->setSize($perPage);
    	}

        $elasticaFilterAnd = new \Elastica\Query\BoolQuery();

        /* handle hidemenu option */
        $hideMenu = $this->modx->getOption('hideMenu',$scriptProperties,2);
        if ($hideMenu != 2) {
            $elasticaFilterHideMenu  = new \Elastica\Query\Term();
            $elasticaFilterHideMenu->setTerm('hidemenu', ($hideMenu ? 1 : 0));
            $elasticaFilterAnd->addMust($elasticaFilterHideMenu);
        }

        /* handle contexts */
        $contexts = $this->modx->getOption('contexts',$scriptProperties,'');
        $contexts = !empty($contexts) ? $contexts : $this->modx->context->get('key');
        $contexts = explode(',',$contexts);
        $elasticaFilterContext  = new \Elastica\Query\Terms();
        $elasticaFilterContext->setTerms('context_key', $contexts);
        $elasticaFilterAnd->addMust($elasticaFilterContext);

        /* handle restrict search to these IDs */
        $ids = $this->modx->getOption('ids',$scriptProperties,'');
    	  if (!empty($ids)) {
            $idType = $this->modx->getOption('idType',$this->config,'parents');
            $depth = $this->modx->getOption('depth',$this->config,10);
            $ids = $this->processIds($ids,$idType,$depth);

            $elasticaFilterId  = new \Elastica\Query\Terms();
            $elasticaFilterId->setTerms('id', $ids);
            $elasticaFilterAnd->addMust($elasticaFilterId);
        }

        /* handle exclude IDs from search */
        $exclude = $this->modx->getOption('exclude',$scriptProperties,'');
        if (!empty($exclude)) {
            $idType = $this->modx->getOption('idType',$this->config,'parents');
            $depth = $this->modx->getOption('depth',$this->config,10);
            $exclude = $this->processIds($exclude,$idType,$depth);

            $elasticaFilterExcludeId  = new \Elastica\Query\Terms();
            $elasticaFilterExcludeId->setTerms('id', $exclude);
            $elasticaFilterAnd->addMustNot($elasticaFilterExcludeId);
        }

        /* basic always-on conditions */
        $elasticaFilterPublished  = new \Elastica\Query\Term();
        $elasticaFilterPublished->setTerm('published', true);
        $elasticaFilterAnd->addMust($elasticaFilterPublished);

        $elasticaFilterSearchable  = new \Elastica\Query\Term();
        $elasticaFilterSearchable->setTerm('searchable', true);
        $elasticaFilterAnd->addMust($elasticaFilterSearchable);

        $elasticaFilterDeleted  = new \Elastica\Query\Term();
        $elasticaFilterDeleted->setTerm('deleted', false);
        $elasticaFilterAnd->addMust($elasticaFilterDeleted);

        $elasticaQuery->setPostFilter($elasticaFilterAnd);

        /* sorting */
        if (!empty($scriptProperties['sortBy'])) {
            $sortDir = $this->modx->getOption('sortDir',$scriptProperties,'desc');
            $sortDirs = explode(',',$sortDir);
            $sortBys = explode(',',$scriptProperties['sortBy']);
            $dir = 'desc';
            $sortArray = array();
            for ($i=0;$i<count($sortBys);$i++) {
                if (isset($sortDirs[$i])) {
                    $dir= $sortDirs[$i];
                }
                $sortArray[] = array($sortBys[$i] => $dir);

            }
            //$elasticaQuery->setSort($sortArray);
            $elasticaQuery->addSort(
                ['publishedon' => 'desc']
            );
        }


        /* prepare response array */
        $response = array(
            'total' => 0,
            'start' => !empty($offset) ? $offset : 0,
            'limit' => $perPage,
            'status' => 0,
            'query_time' => 0,
            'results' => array(),
        );

        $elasticaResultSet = $this->index->search($elasticaQuery);

        $elasticaResults  = $elasticaResultSet->getResults();
        $totalResults         = $elasticaResultSet->getTotalHits();

        if ($totalResults > 0) {
            $response['total'] = $totalResults;
            $response['query_time'] = $elasticaResultSet->getTotalTime();
            $response['status'] = 1;
            $response['results'] = array();
            foreach ($elasticaResults as $doc) {
                $d = $doc->getData();

                /** @var modResource $resource */
                $resource = $this->modx->newObject($d['class_key']);
                if ($resource->checkPolicy('list')) {
                    $response['results'][] = $d;
                }
            }
        }

        return $response;
    }

    /**
     * Index a Resource.
     *
     * @param array $fields
     * @return boolean
     */
    public function index(array $fields = [])
    {
        if (isset($fields['searchable']) && empty($fields['searchable'])) {
            return false;
        }

        if (isset($fields['published']) && empty($fields['published'])) {
            return false;
        }

        if (isset($fields['deleted']) && !empty($fields['deleted'])) {
            return false;
        }

        $type       = $this->index->getType($fields['context_key']);
        $document   = new \Elastica\Document();
        $dateFields = ['createdon','editedon','deletedon','publishedon'];
        foreach ($fields as $fieldName => $value) {
            if (is_string($fieldName) && !is_array($value) && !is_object($value)) {
                if (in_array($fieldName, $dateFields)) {
                    $value = strftime('%Y-%m-%dT%H:%M:%SZ', strtotime($value));
                    $fields[$fieldName] = $value;
                }

                if($fieldName === 'id'){
                    $document->setId($value);
                }

                $document->set($fieldName, $value);
            }
        }
        $this->modx->log(modX::LOG_LEVEL_DEBUG, '[SimpleSearch] Indexing Resource: ' . print_r($fields, true));

        $response = $type->addDocument($document);

        $type->getIndex()->refresh();

        return $response->isOk();
    }

    /**
     * Remove a Resource from the ElasticSearch index.
     *
     * @param string|int $id
     */
    public function removeIndex($id)
    {
        $this->modx->log(modX::LOG_LEVEL_DEBUG, '[SimpleSearch] Removing Resource From Index: ' . $id);

        /** @var modResource $resource */
        $resource = $this->modx->getObject('modResource', $id);

        $typeName = 'web';
        if ($resource) {
            $typeName = $resource->context_key;
        }

        $type = $this->index->getType($typeName);

        try {
            $type->deleteById($id);
        } catch (Exception $e) {}

        $type->getIndex()->refresh();
    }

    /**
     * It's multi match query realisations
     * @author Robert Kuznetsov <robertkuznetsou@gmail.com>
     * @param $string
     * @param $fields
     * @return \Elastica\Query\MultiMatch $query
     */
    private function getMultiMatchQuery($string, $fields) {
        /** @var \Elastica\Query\MultiMatch $query */
        $query = new \Elastica\Query\MultiMatch();
        $query->setFields($fields);

        $query->setQuery($string);
        $query->setType('phrase');
        $query->setOperator('and');

        return $query;
    }
}
