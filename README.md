## 🍀 Clover 
A unopinionated **PHP** framework.



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
