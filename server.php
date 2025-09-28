<?php

require_once __DIR__ . "/vendor/autoload.php";

use Clover\Clover;
use Clover\Http\Request;
use Clover\Http\Response;

$app = new Clover();
$router = $app->router();

// Home route
$router->get("/public/", fn(Request $req, Response $res) =>
$res->send("<h1>Welcome to 🍀 Clover PHP!</h1>"));

$app->run(3000, true);
