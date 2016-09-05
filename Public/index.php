<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello World, $name");

    return $response;
});

$app->get('/test/{new}', function (Request $request, Response $response) {
    $new = $request->getAttribute('new');
    $response->getBody()->write("This is test, $new");

    return $response;
});

$app->run();