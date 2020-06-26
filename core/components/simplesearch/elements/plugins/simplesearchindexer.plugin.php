<?php
/**
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */

require_once $modx->getOption(
    'simplesearch.core_path',
    null,
    $modx->getOption('core_path') . 'components/simplesearch/'
) . 'model/simplesearch/simplesearch.class.php';

$search = new SimpleSearch($modx, $scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || (!($search->driver instanceof SimpleSearchDriverSolr) && !($search->driver instanceof SimpleSearchDriverElastic))) {
    return;
}

$action           = 'index';
$resourcesToIndex = [];
switch ($modx->event->name) {
    case 'OnDocFormSave':
        $action        = 'index';
        $resourceArray = $scriptProperties['resource']->toArray();

        if ($resourceArray['published'] === true && $resourceArray['deleted'] === false) {
            $action = 'index';
            foreach ($_POST as $key => $value) {
                if (substr($key,0,2) === 'tv') {
                    $id = str_replace('tv', '',$key);

                    /** @var modTemplateVar $tv */
                    $tv = $modx->getObject('modTemplateVar', $id);
                    if ($tv) {
                        $resourceArray[$tv->get('name')] = $tv->renderOutput($resource->get('id'));
                        $modx->log(modX::LOG_LEVEL_DEBUG, 'Indexing ' . $tv->get('name') . ': ' . $resourceArray[$tv->get('name')]);
                    }
                    unset($resourceArray[$key]);
                }
            }
        } else {
            $action = 'removeIndex';
        }

        $resourcesToIndex[] = $search->prepareResourceForIndex($resourceArray);
        break;
    case 'OnDocPublished':
        $action = 'index';

        $resourcesToIndex[] = $search->prepareResourceForIndex(
            $scriptProperties['resource']->toArray()
        );
        break;
    case 'OnDocUnpublished':
    case 'OnDocUnPublished':
        $action = 'removeIndex';

        $resourcesToIndex[] = $search->prepareResourceForIndex(
            $scriptProperties['resource']->toArray()
        );
        break;
    case 'OnResourceDuplicate':
        $action = 'index';

        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children           = [];

        $search->simpleSearchGetChildren($modx, $children, $newResource->get('id'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }

        break;
    case 'OnResourceDelete':
        $action             = 'removeIndex';
        $resourcesToIndex[] = $resource->toArray();
        $children           = [];

        $search->simpleSearchGetChildren($modx, $children, $resource->get('id'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case 'OnResourceUndelete':
        $action             = 'index';
        $resourcesToIndex[] = $resource->toArray();
        $children           = [];

        $search->simpleSearchGetChildren($modx, $children, $resource->get('id'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray['id'])) {
        if ($action === 'index') {
            $search->driver->index($resourceArray);
        } else if ($action === 'removeIndex') {
            $search->driver->removeIndex($resourceArray['id']);
        }
    }
}

return;