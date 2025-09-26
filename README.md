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

$router->get("/", fn($req, $res) => {
$res->send('Welcome to 🍀 Clover PHP!');
});

$app->run(PORT, "Server starting);

```
