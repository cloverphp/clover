<?php

require_once __DIR__ . "/vendor/autoload.php";

use Clover\Clover;
use Clover\Http\Request;
use Clover\Http\Response;

$app = new Clover();
$router = $app->router();

// Normal route
$router->get("/", fn(Request $req, Response $res) => $res->send("<h1>Welcome to Clover PHP!"));

$router->post("/", fn(Request $req, Response $res) =>
    $res->json(['name' => 'Clover PHP!'])
);

$app->run(3000, true);
