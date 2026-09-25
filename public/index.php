<?php

require __DIR__ .'/../vendor/autoload.php';

use Clover\Framework\Clover;

$app = new Clover;

require __DIR__ .'/../router/routes.php';

$app->run(3000, true);
