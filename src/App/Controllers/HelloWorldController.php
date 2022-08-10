<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


final class HelloWorldController
{

    public function HelloWorld(Request $request, Response $response, $args): Response
    {
        $response = $response->withJson(array("success" => true, "message" => 'Hello world'), 200);
        return $response;
    }
}
