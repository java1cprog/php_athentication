<?php

use Slim\App;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new App([
  'mode' => file_get_contents(INC_ROOT . '/mode.php')
]);

$app->configureMode($config->get('mode'), function() use ($app) {
   $app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}"); });
echo $app->config->get('db.driver');
//echo $app->config('mode');

//$app->get('/test/{name}', function ($request, $response, $args) {
//    return $response->getBody()->write('Hello, ' . $args['name']);
//});
