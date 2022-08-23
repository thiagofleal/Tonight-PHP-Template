<?php

namespace App\Controllers;

use Tonight\MVC\Controller;

class ErrorController extends Controller
{
    public function notFound() {
        $this->render("404", "main");
    }
}