<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 29-01-2018
 * Time: 12:49
 */

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../views/View.php';

class System extends Controller
{

    public function index(){
        $this->view = new View();
        $data["title"] = "This is an example!!";
        $this->view->render("system/login", $data);
    }
}