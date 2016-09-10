<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var RealtorX5 $RealtorX5 */
$RealtorX5 = $modx->getService('realtorx5', 'RealtorX5', $modx->getOption('realtorx5_core_path', null,
        $modx->getOption('core_path') . 'components/realtorx5/') . 'model/realtorx5/'
);
$modx->lexicon->load('realtorx5:default');

// handle request
$corePath = $modx->getOption('realtorx5_core_path', null, $modx->getOption('core_path') . 'components/realtorx5/');
$path = $modx->getOption('processorsPath', $RealtorX5->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));