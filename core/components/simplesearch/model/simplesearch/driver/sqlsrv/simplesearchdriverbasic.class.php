<?php

/**
 * The base SqlSrv class for SimpleSearch
 *
 * @package
 */
require_once strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/simplesearchdriverbasic.class.php';
class SimpleSearchDriverBasic_sqlsrv extends SimpleSearchDriverBasic {

    /**
     * add relevancy search criteria to query
     *
     * @param xPDOQuery $query
     * @param array $options
     * @param string $options['class'] class name (not currently used but may be needed with custom classes)
     * @param string $options['fields'] query-ready list of fields to search for the terms
     * @param array $options['terms'] search terms (will only be one array member if useAllWords parameter is set)
     * @return boolean
     */
    public function addRelevancyCondition(&$query, $options) {
        $class = $this->modx->getOption('class', $options, 'modResource');
        $fields = $this->modx->getOption('fields', $options, '');
        $terms = $this->modx->getOption('terms', $options, array());

        /* this is the basic query logic that will need to be implemented
         *
        $termlist = implode(' OR ', $terms);
        $query->leftJoin("CONTAINSTABLE ({$modx->getTableName($class)},({$fields}), '({$termlist})' )", 'KEY_TBL');
        $query->where("KEY_TBL.RANK > 0");
         */
        return true;
    }
}