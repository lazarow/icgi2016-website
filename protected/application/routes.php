<?php
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

$app->get('/', function (Request $request, Response $response) {
	$response->getBody()->write('Test');
	return $response;
});
