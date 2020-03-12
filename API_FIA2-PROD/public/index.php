<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

//require __DIR__ . '/../vendor/autoload.php';
require '../vendor/autoload.php';
require '../src/config/db.php';
//$app = AppFactory::create();
$app = new \Slim\App;
/*
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});
*/
//rutas clientes
require '../src/route/clientes.php';
$app->run();