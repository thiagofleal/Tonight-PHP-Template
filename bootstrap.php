<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/environment.php";

define("HOST", $host);
define("PATH", $path);

Config\Sets::apply();
Config\Routes::declare();