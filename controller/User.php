<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 22-01-2018
 * Time: 15:25
 */
require_once __DIR__ . '/../model/Users.php';

class User
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        ActiveRecord\Config::initialize(function($cfg)
        {
            $cfg->set_model_directory('.');
            $cfg->set_connections(
                array(
                    'development' => 'mysql://root:root@localhost/test',
                    'test' => 'mysql://root:root@localhost/test',
                    'production' => 'mysql://root:root@localhost/test',
                )
            );
        });
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