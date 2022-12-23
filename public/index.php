<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Factory\AppFactory;

require_once("vendor/autoload.php");

$container = require_once __DIR__ . "../../config/container.php";

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get("/", function(Request $request, Response $response, array $args) {
    $response->getBody()->write("Hello World");
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
});

$app->run();