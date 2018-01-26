<?php
use Pecee\SimpleRouter\SimpleRouter;
require_once "controller/User.php";//Es necesario incluir la clase para poser llamarla

SimpleRouter::get('/', 'User@index');
SimpleRouter::post('/', 'User@save');
SimpleRouter::put('/', 'User@update');
SimpleRouter::delete('/', 'User@delete');