<?php
/**
 * SimpleSearch
 *
 *  Solr search driver for SimpleSearch. This requires a few things to run:
 *
 * - The PECL Solr package, found here: http://pecl.php.net/package/solr
 * - A working schema.xml file and running Solr instance.
 *
 * A sample schema.xml file is provided for you in the core/components/simplesearch/docs/
 * directory. Rename the file from solr.schema.xml to schema.xml and put in
 * the appropriate conf/ directory in your preferred Solr core. You may
 * customize the schema as you feel the need.
 *
 * @package simplesearch
 */
require_once __DIR__ . '/simplesearchdriver.class.php';

class SimpleSearchDriverSolr extends SimpleSearchDriver
{
    /** @var array An array of connection properties for our SolrClient */
    private $_connectionOptions = array();

    /** @var A reference to the SolrClient object */
    public $client;

    /**
     * Initialize the Solr client, and setup settings for the client.
     * 
     * @return void
     */
    public function initialize()
    {
        $this->_connectionOptions = [
            'hostname'        => $this->modx->getOption('simplesearch.solr.hostname', null, '127.0.0.1'),
            'port'            => $this->modx->getOption('simplesearch.solr.port', null, '8983'),
            'path'            => $this->modx->getOption('simplesearch.solr.path', null, ''),
            'login'           => $this->modx->getOption('simplesearch.solr.username', null, ''),
            'password'        => $this->modx->getOption('simplesearch.solr.password', null, ''),
            'timeout'         => $this->modx->getOption('simplesearch.solr.timeout', null, 30),
            'secure'          => $this->modx->getOption('simplesearch.solr.ssl', null, false),
            'ssl_cert'        => $this->modx->getOption('simplesearch.solr.ssl_cert', null, ''),
            'ssl_key'         => $this->modx->getOption('simplesearch.solr.ssl_key', null, ''),
            'ssl_keypassword' => $this->modx->getOption('simplesearch.solr.ssl_keypassword', null, ''),
            'ssl_cainfo'      => $this->modx->getOption('simplesearch.solr.ssl_cainfo', null, ''),
            'ssl_capath'      => $this->modx->getOption('simplesearch.solr.ssl_capath', null, ''),
            'proxy_host'      => $this->modx->getOption('simplesearch.solr.proxy_host', null, ''),
            'proxy_port'      => $this->modx->getOption('simplesearch.solr.proxy_port', null, ''),
            'proxy_login'     => $this->modx->getOption('simplesearch.solr.proxy_username', null, ''),
            'proxy_password'  => $this->modx->getOption('simplesearch.solr.proxy_password', null, ''),
        ];

        try {
            $this->client = new SolrClient($this->_connectionOptions);
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR,'Error connecting to Solr server: '.$e->getMessage());
        }
    }

    /**
     * Run the search against a sanitized query string via Solr.
     *
     * @param string $string
     * @param array $scriptProperties The scriptProperties array from the SimpleSearch snippet
     * @return array
     */
    public function search($string, array $scriptProperties = [])
    {
        /** @var SolrQuery $query */
        $query = new SolrQuery();
        $query->setQuery($string);

        /* Set limit. */
        $perPage = $this->modx->getOption('perPage',$scriptProperties,10);
        if (!empty($perPage)) {
            $offset = $this->modx->getOption('start',$scriptProperties,0);
            $offsetIndex = $this->modx->getOption('offsetIndex',$scriptProperties,'sisea_offset');
            if (isset($_REQUEST[$offsetIndex])) $offset = (int)$_REQUEST[$offsetIndex];
            $query->setStart($offset);
            $query->setRows($perPage);
        }

        /* Add fields to search. */
        $fields = $this->modx->getFields('modResource');
        foreach ($fields as $fieldName => $default) {
            $query->addField($fieldName);
        }

        $includeTVs    = $this->modx->getOption('includeTVs',$scriptProperties,false);
        $includeTVList = $this->modx->getOption('includeTVList', $scriptProperties, '');
        if ($includeTVs) {
            $sql = $this->modx->newQuery('modTemplateVar');
            $sql->select($this->modx->getSelectColumns('modTemplateVar', '', '', ['id','name']));

            if (!empty ($includeTVList)) {
                $includeTVList = explode(',', $includeTVList);
                $includeTVList = array_map('trim', $includeTVList);

                $sql->where([
                    'name:IN' => $includeTVList
                ]);
            }

            $sql->sortby($this->modx->escape('name'), 'ASC');
            $sql->prepare();
            $sql = $sql->toSql();
            $tvs = $this->modx->query($sql);
            if ($tvs && $tvs instanceof PDOStatement) {
                while ($tv = $tvs->fetch(PDO::FETCH_ASSOC)) {
                    $query->addField($tv['name']);
                }
            }
        }

        /* Handle hidemenu option. */
        $hideMenu = $this->modx->getOption('hideMenu', $scriptProperties, 2);
        if ($hideMenu != 2) {
            $query->addFilterQuery('hidemenu:' . ($hideMenu ? 1 : 0));
        }

        /* Handle contexts. */
        $contexts = $this->modx->getOption('contexts',$scriptProperties,'');
        $contexts = !empty($contexts) ? $contexts : $this->modx->context->get('key');
        $contexts = implode(' ',explode(',',$contexts));
        $query->addFilterQuery('context_key:(' . $contexts . ')');

        /* Handle restrict search to these IDs. */
        $ids = $this->modx->getOption('ids', $scriptProperties, '');
        if (!empty($ids)) {
            $idType = $this->modx->getOption('idType', $this->config, 'parents');
            $depth  = $this->modx->getOption('depth', $this->config, 10);
            $ids    = $this->processIds($ids, $idType, $depth);

            $query->addFilterQuery('id:(' . implode(' ', $ids) . ')');
        }

        /* Handle exclude IDs from search. */
        $exclude = $this->modx->getOption('exclude', $scriptProperties, '');
        if (!empty($exclude)) {
            $exclude = $this->cleanIds($exclude);
            $exclude = implode(' ',explode(',', $exclude));

            $query->addFilterQuery('-id:('.$exclude.')');
        }

        /* Basic always-on conditions. */
        $query->addFilterQuery('published:1');
        $query->addFilterQuery('searchable:1');
        $query->addFilterQuery('deleted:0');

        /* Sorting. */
        if (!empty($scriptProperties['sortBy'])) {
            $sortDir  = $this->modx->getOption('sortDir', $scriptProperties, 'desc');
            $sortDirs = explode(',', $sortDir);
            $sortBys  = explode(',', $scriptProperties['sortBy']);
            $dir      = 'desc';

            for ($i = 0; $i < count($sortBys); $i++) {
                if (isset($sortDirs[$i])) {
                    $dir = $sortDirs[$i];
                }

                $dir = strtolower($dir) == 'asc' ? SolrQuery::ORDER_ASC : SolrQuery::ORDER_DESC;
                $query->addSortField($sortBys[$i],$dir);
            }
        }

        /* prepare response array */
        $response = [
            'total'      => 0,
            'start'      => !empty($offset) ? $offset : 0,
            'limit'      => $perPage,
            'status'     => 0,
            'query_time' => 0,
            'results'    => []
        ];
        
        /* query Solr */
        try {
            $queryResponse  = $this->client->query($query);
            $responseObject = $queryResponse->getResponse();
            if ($responseObject) {
                $response['total']      = $responseObject->response->numFound;
                $response['query_time'] = $responseObject->responseHeader->QTime;
                $response['status']     = $responseObject->responseHeader->status;
                $response['results']    = [];

                if (!empty($responseObject->response->docs)) {
                    foreach ($responseObject->response->docs as $doc) {
                        $document = [];
                        foreach ($doc as $key => $value) {
                            $document[$key] = $value;
                        }

                        /** @var modResource $resource */
                        $resource = $this->modx->newObject($document['class_key']);
                        if ($resource->checkPolicy('list')) {
                            $response['results'][] = $document;
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR,'Error running query on Solr server: '.$e->getMessage());
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

        $document   = new SolrInputDocument();
        $dateFields = ['createdon', 'editedon', 'deletedon', 'publishedon'];
        foreach ($fields as $fieldName => $value) {
            if (is_string($fieldName) && !is_array($value) && !is_object($value)) {
                if (in_array($fieldName, $dateFields)) {
                    $value              = strftime('%Y-%m-%dT%H:%M:%SZ', strtotime($value));
                    $fields[$fieldName] = $value;
                }
                $document->addField($fieldName, $value);
            }
        }
        $this->modx->log(modX::LOG_LEVEL_DEBUG, '[SimpleSearch] Indexing Resource: ' . print_r($fields, true));

        $response = false;
        try {
            $response = $this->client->addDocument($document);
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Error adding Document to index on Solr server: ' . $e->getMessage());
        }

        $this->commit();
        return $response;
    }

    /**
     * Remove a Resource from the Solr index.
     *
     * @param string|int $id
     */
    public function removeIndex($id)
    {
        $this->modx->log(modX::LOG_LEVEL_DEBUG, '[SimpleSearch] Removing Resource From Index: ' . $id);
        $this->client->deleteById($id);
        $this->commit();
    }

    /**
     * Commit the operation to the Solr core.
     * 
     * @return void
     */
    public function commit()
    {
        try {
            $this->client->commit();
        } catch (Exception $e) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Error committing query on Solr server: ' . $e->getMessage());
        }
    }
}
