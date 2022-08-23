<?php

require_once __DIR__ . "/../bootstrap.php";

use Tonight\MVC\Router;

try {
    Router::run();
} catch (Exception $e) {
    echo $e->getMessage();
}