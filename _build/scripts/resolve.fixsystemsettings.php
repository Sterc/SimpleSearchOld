

<?php
/**
 * @var \Teleport\Transport\Transport $transport
 * @var array $object
 * @var array $options
 */

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_UPGRADE:
        /** @var modX $modx */
        $modx =& $transport->xpdo;

        /** @var \MODX\Revolution\modSystemSetting $ss */
        $ss = $modx->getObject(\MODX\Revolution\modSystemSetting::class, ['key' => 'simplesearch.driver_class']);
        if ($ss && $ss->value === 'SimpleSearchDriverBasic') {
            $ss->set('value', '\SimpleSearch\Driver\SimpleSearchDriverBasic');
            $ss->save();
        }

        break;
}

return true;
