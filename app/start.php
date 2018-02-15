<?php

use Slim\App;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new App();

$app->get('/test/{name}', function ($request, $response, $args) {
    return $response->getBody()->write('Hello, ' . $args['name']);
});
