<?php

namespace App\Controllers;

use Tonight\MVC\Controller;

class HomeController extends Controller
{
    public function index() {
        $this->setVariable("title", "Tonight-PHP Framework");
        $this->render("home", "main");
    }
}