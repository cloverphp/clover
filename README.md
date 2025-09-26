## 🍀 Clover 
A unopinionated **PHP** framework.

[![Tests](https://github.com/cloverphp/clover/actions/workflows/tests.yml/badge.svg)](https://github.com/cloverphp/clover/actions/workflows/tests.yml)
![Packagist Version](https://img.shields.io/packagist/v/cloverphp/clover?style=flat&logo=composer&logoColor=%23fff)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/cloverphp/clover/php?style=flat&logo=php&logoColor=blue&label=PHP&color=blue)
![Packagist License](https://img.shields.io/packagist/l/cloverphp/clover?style=flat&label=License&color=blue)
![Packagist Downloads](https://img.shields.io/packagist/dt/cloverphp/clover?style=flat&logo=packagist&label=Downloads&color=blue)
![Packagist Stars](https://img.shields.io/packagist/stars/cloverphp/clover?style=flat&logo=github&logoColor=%23ffffff&label=%F0%9F%8C%9F%20Stars)

---

### Example
Clover PHP Starter template.

```php
<?php
// server.php

require_once(__DIR__ . "/vendor/autoload.php");

use Clover\Application;
use Clover\Router;
use Clover\Request;
use Clover\Response;

$app = new Application();
$router = new Router();
const PORT = 3000;

$app->use($router);

// Routes
$router->get("/", fn(Request $req, Response $res) => {
    $res->send("Welcome to 🍀 Clover PHP!");
});

$router->post("/posts", fn(Request $req, Response $res) => {
    $res->json(['name' => 'Clover PHP']);
});

// Run server with watch mode enabled
$app->run(PORT, fn($error) => {
    if (!$error) {
        $app->success("Server started! Open in browser: http://localhost:" . PORT);
    } else {
        $app->error("Failed to start server: " . $error);
    }
}, true);

```
---
