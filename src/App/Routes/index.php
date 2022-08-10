<?php

use App\Controllers\HelloWorldController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

   $app->GET('/', HelloWorldController::class . ':HelloWorld');

$app->run();
