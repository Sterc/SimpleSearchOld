<?php
/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */

class SimpleSearchAutoSuggestionsProcessor extends modProcessor {
    /**
     * @access public
     * @return Mixed.
     */
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
     * @return Array.
     */
    protected function getSearchSuggestions ()
    {
        $suggestions = [];

        $suggestionsTv = $this->modx->getOption('simplesearch.autosuggest_tv', null, 'simpleSearchAutoSuggestions');

        $c = $this->modx->newQuery('modTemplateVarResource');
        $c->leftJoin('modTemplateVar', 'modTemplateVar', 'tmplvarid = modTemplateVar.id');

        if (is_numeric($suggestionsTv)) {
            $c->where([
                          'modTemplateVar.id' => $suggestionsTv
                      ]);
        } else {
            $c->where([
                          'modTemplateVar.name' => $suggestionsTv
                      ]);
        }

        foreach ($this->modx->getCollection('modTemplateVarResource', $c) as $suggestion) {
            $suggestions = array_merge($suggestions, array_map('trim', explode(',', $suggestion->get('value'))));
        }

        return array_unique($suggestions);
    }
}

return 'SimpleSearchAutoSuggestionsProcessor';
