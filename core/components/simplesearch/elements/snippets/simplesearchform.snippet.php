<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(
    'simplesearch.core_path',
    null,
    $modx->getOption('core_path') . 'components/simplesearch/'
) . 'model/simplesearch/simplesearch.class.php';
$search = new SimpleSearch($modx, $scriptProperties);
$parser = $search;

/* Overwrite with pdoparser for filebased chunks */
if ($pdo = $modx->getService('pdoTools')) {
    $parser = $pdo;
}

/* Setup default options. */
$scriptProperties = array_merge(
    array(
        'tpl'           => 'SearchForm',
        'method'        => 'get',
        'searchIndex'   => 'search',
        'toPlaceholder' => false,
        'landing'       => $modx->resource->get('id'),
), $scriptProperties);

if (empty($scriptProperties['landing'])) {
  $scriptProperties['landing'] = $modx->resource->get('id');
}

/* If get value already exists, set it as default. */
$searchValue  = isset($_REQUEST[$scriptProperties['searchIndex']]) ? $_REQUEST[$scriptProperties['searchIndex']] : '';
$searchValues = explode(' ', $searchValue);

array_map(array($modx, 'sanitizeString'), $searchValues);

$searchValue  = implode(' ', $searchValues);
$placeholders = array(
    'method'      => $scriptProperties['method'],
    'landing'     => $scriptProperties['landing'],
    'searchValue' => strip_tags(htmlspecialchars($searchValue, ENT_QUOTES, 'UTF-8')),
    'searchIndex' => $scriptProperties['searchIndex'],
);

$output = $parser->getChunk($scriptProperties['tpl'], $placeholders);

return $search->output($output, $scriptProperties['toPlaceholder']);
