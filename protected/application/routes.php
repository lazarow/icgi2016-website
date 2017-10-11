<?php
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

$app->get('/', function (Request $request, Response $response) {
	return $this->view->render($response, 'start.html');
});

$app->get('/cfp', function (Request $request, Response $response) {
	return $this->view->render($response, 'cfp.html');
});

$app->get('/papers', function (Request $request, Response $response) {
	return $this->view->render($response, 'papers.html');
});

$app->get('/keynotes', function (Request $request, Response $response) {
	return $this->view->render($response, 'keynotes.html');
});

$app->get('/venue', function (Request $request, Response $response) {
	return $this->view->render($response, 'venue.html');
});

$app->get('/register', function (Request $request, Response $response) {
	return $this->view->render($response, 'register.html');
});

$app->get('/program', function (Request $request, Response $response) {
	return $this->view->render($response, 'program.html');
});

