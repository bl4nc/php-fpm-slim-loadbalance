<?php

namespace src;

function slimConfiguration(): \Slim\Container
{
    $configuration = [
        'settings' => [
            'displayErrorDetails' => $_ENV['DISPLAY_ERRORS_DETAILS'],
        ],
    ];
    $container = new \Slim\Container($configuration);
    return $container;
}