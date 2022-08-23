<?php

namespace Config;

use Tonight\MVC\Config;

class Sets
{
    const BaseUrl = HOST;
    const BasePath = PATH;
    const ModelsNamespace = 'App\\Models';
    const ControllersNamespace = "App\\Controllers";

    public static function apply()
    {
        Config::setBaseUrl(self::BaseUrl);
        Config::setRoutesFolder(self::BasePath);
        Config::setModelsNamespace(self::ModelsNamespace);
        Config::setControllersNamespace(self::ControllersNamespace);
        Config::setViewsPath(__DIR__ . "/../App/Views/pages");
        Config::setTemplatesPath(__DIR__ . "/../App/Views/templates");
        Config::setUrlGetter(function () {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        });
        /**
         * To create JSON-based REST API, uncomment follow code
         */
        // $inputFile = function() {
        //     return json_decode(file_get_contents("php://input"));
        // };
        // $inputGet = function() {
        //     return $_GET;
        // };
        // Config::setInputProperties([
        //     'get' => $inputGet,
        //     'post' => $inputFile,
        //     'put' => $inputFile,
        //     'delete' => $inputGet
        // ]);
    }
}
