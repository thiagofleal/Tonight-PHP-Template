<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/environment.php";

define("HOST", $host);
define("PATH", $path);
define("DB_DSN", $pdo_dsn);
define("DB_USER", $db_user);
define("DB_PASS", $db_pass);

Config\Sets::apply();
Config\Routes::declare();