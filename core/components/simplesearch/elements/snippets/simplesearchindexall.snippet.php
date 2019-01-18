<?php
/**
 * SimpleSearchIndexAll snippet, used for indexing all resources with alternate search drivers
 *
 * @package simplesearch
 */
require_once $modx->getOption('simplesearch.core_path', null, $modx->getOption('core_path') . 'components/simplesearch/') . 'model/simplesearch/simplesearch.class.php';

$search = new SimpleSearch($modx, $scriptProperties);

$memoryLimit = $modx->getOption('memory_limit', $scriptProperties, '512M');
@ini_set('memory_limit', $memoryLimit);
@set_time_limit(0);

return $search->indexAllResources($scriptProperties);