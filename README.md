## 🍀 Clover 
A unopinionated **PHP** framework.



### Example
```php
<?php

require_once(__DIR__."/vendor/autoload.php");

use Clover\Application;
use Clover\Request;
use Clover\Response;
use Clover\Router;

$app = new Application();
$router = new Router();
const POST = 3000;

$app->use($router);

$router->get("/", fn(Request $req, Response $res) => {
  $res->send('Welcome to 🍀 Clover PHP!');
});

$router->post("/posts", fn(Request $req, Response $res) => {
  $req->send(['name' => 'Clover PHP'])
->json();
});

$app->run(PORT, fn() => {
  if(!$error){
    echo "Server starting". $app->logged();
} else {
echo "error". $app->logged();
}
});

```
