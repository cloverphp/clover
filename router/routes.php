<?php

use Clover\Clover;
use Clover\Http\Request;
use Clover\Http\Response;

$app = new Clover;

$router = $app->router();

$router->get('/public', function (Request $req, Response $res) {
    $res->send('Hello from Clover PHP');
});
