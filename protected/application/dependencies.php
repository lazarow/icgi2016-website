<?php
$app->getContainer()['view'] = function ($container) {
    $view = new \Slim\Views\Twig($container->get('settings')['twigTemplatesDir'], [
		'cache' => $container->get('settings')['twigCacheDir']
    ]);
	$view->offsetSet('base_url', $container['request']->getUri()->getBaseUrl());
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new \Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};