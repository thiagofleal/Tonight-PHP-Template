<?php

namespace Config;

use Tonight\MVC\Config;

class Routes
{
    public static function declare() {
        Config::addRoute("", "HomeController@index", ['GET']);
        Config::setNotFoundRoute("ErrorController@notFound");
    }
}