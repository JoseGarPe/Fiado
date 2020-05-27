<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

//require __DIR__ . '/../vendor/autoload.php';
require 'vendor/autoload.php';
/*require '../vendor/OAuth2/src/OAuth2/Autoloader.php';

OAuth2\Autoloader::register();*/
require 'src/config/db.php';
require 'src/class/producer_response.php';
require 'src/class/user.php';
//require 'server.php';
//$app = AppFactory::create();
$app = new \Slim\App;
//$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
/*
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});
*/
//rutas clientes
require 'src/route/clientes.php';
$app->run();
?>