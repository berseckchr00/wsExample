<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 22-01-2018
 * Time: 15:25
 */
require_once __DIR__ . '/../model/Users.php';

class User extends Controller
{

    /**
     * User constructor.
     */
    public function __construct()
    {

    }

    public function index(){

        /*$user = Users::find(5);//find by id element?
        $user->email .= ";diego.gonzalez@grupogtd.com";
        $user->save();//update field
        $user= Users::find(5);*/

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