<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 29-01-2018
 * Time: 16:17
 */
class View
{
    public function __construct() {

    }

    public function render($name, $data = FALSE) {

        if ($data != FALSE) {
            extract($data);
        }
        require( __DIR__  ."/". $name . ".php");
    }
}