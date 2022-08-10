<?php

use App\Controllers\HelloWorldController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

$app->group('/api/v1', function () use ($app) {
   $app->GET('', HelloWorldController::class . ':HelloWorld');
});

$app->run();
