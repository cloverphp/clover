<?php

declare(strict_types=1);

use Clover\Framework\Clover;
use Clover\Framework\Http\Request;
use Clover\Framework\Http\Response;

$app = new Clover;

$router = $app->router();

$router->get('/', function (Request $req, Response $res) {
    $res->send('Hello from Clover PHP');
});

