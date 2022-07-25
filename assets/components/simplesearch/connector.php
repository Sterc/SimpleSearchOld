<?php

require_once dirname(dirname(dirname(__DIR__))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

use SimpleSearch\SimpleSearch;

$webActions = [
    'web/autosuggestions'
];

if (!empty($_REQUEST['action']) && in_array($_REQUEST['action'], $webActions)) {
    define('MODX_REQP', false);
}

if (in_array($_REQUEST['action'], $webActions, true)) {
    if ($modx->user->hasSessionContext($modx->context->get('key'))) {
        $_SERVER['HTTP_MODAUTH'] = $_SESSION["modx.{$modx->context->get('key')}.user.token"];
    } else {
        $_SESSION["modx.{$modx->context->get('key')}.user.token"] = 0;
        $_SERVER['HTTP_MODAUTH'] = 0;
    }

    $_REQUEST['HTTP_MODAUTH'] = $_SERVER['HTTP_MODAUTH'];
}

$instance = $modx->services->get('simplesearch');
if ($instance instanceof SimpleSearch) {
    $modx->request->handleRequest([
        'processors_path' => $instance->config['processors_path'],
        'location'        => ''
    ]);
}
