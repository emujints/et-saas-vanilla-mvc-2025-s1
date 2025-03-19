<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';

use Framework\Router;

$router = new Router();

try {
    $router->route();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
