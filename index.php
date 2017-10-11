<?php
require __DIR__ . '/protected/vendor/autoload.php';

$app = new \Slim\App(['settings' => [
	'displayErrorDetails' => false,
	'routerCacheFile' => __DIR__ . '/protected/runtime/routes.cache',
	'twigTemplatesDir' => __DIR__ . '/protected/templates',
	'twigCacheDir' => __DIR__ . '/protected/runtime'
]]);
if (file_exists(__DIR__ . '/protected/application/configuration.php')) {
	require __DIR__ . '/protected/application/configuration.php';
}
require __DIR__ . '/protected/application/dependencies.php';
require __DIR__ . '/protected/application/middleware.php';
require __DIR__ . '/protected/application/routes.php';
$app->run();