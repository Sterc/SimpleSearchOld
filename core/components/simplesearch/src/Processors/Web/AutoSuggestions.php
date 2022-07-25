<?php
namespace SimpleSearch\Processors\Web;

use MODX\Revolution\Processors\Processor;
use MODX\Revolution\modTemplateVar;
use MODX\Revolution\modTemplateVarResource;

class AutoSuggestions extends Processor {

    public function process()
    {
        $suggestions = [];

        foreach ($this->getSearchSuggestions() as $suggestion) {
            if (preg_match('/^' . preg_quote(strtolower($this->getProperty('search'))) . '/', strtolower($suggestion))) {
                $suggestions[] = $suggestion;
            }
        }

        $suggestions = array_slice($suggestions, 0, (int) $this->getProperty('limit', 8));

        return $this->outputArray($suggestions, count($suggestions));
    }

    /**
     * @access protected
     * @return array
     */
    protected function getSearchSuggestions (): array
    {
        $suggestions = [];

        $suggestionsTv = $this->modx->getOption('simplesearch.autosuggest_tv', null, 'simpleSearchAutoSuggestions');

        $c = $this->modx->newQuery(modTemplateVarResource::class);
        $c->leftJoin(modTemplateVar::class, 'modTemplateVar', 'tmplvarid = modTemplateVar.id');

        if (is_numeric($suggestionsTv)) {
            $c->where([
                'modTemplateVar.id' => $suggestionsTv
            ]);
        } else {
            $c->where([
                'modTemplateVar.name' => $suggestionsTv
            ]);
        }

        foreach ($this->modx->getCollection(modTemplateVarResource::class, $c) as $suggestion) {
            $suggestions = array_merge($suggestions, array_map('trim', explode(',', $suggestion->get('value'))));
        }

        return array_unique($suggestions);
    }
}
