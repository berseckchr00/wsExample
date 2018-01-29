<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 22-01-2018
 * Time: 15:25
 */
require_once __DIR__ . '/../model/Users.php';
require_once __DIR__ . '/Controller.php';

class User extends Controller
{

    public function index(){

        $user = new Users();
        $user->id = null;
        $user->user = 'neeb';
        $user->email = 'neebUser@mial.com';
        $user->password = MD5('password');
        $user->save();
        print_r(json_encode(Users::first()->attributes()));
    }

    public function save(){
        $params = $_POST;
        $object = input()->getObject('param1', null, 'post');
        print_r($object);
    }

    public function update(){

    }

    public function delete(){

    }
}