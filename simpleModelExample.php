<?php
/**
 * Created by PhpStorm.
 * Users: dgonzalezj
 * Date: 15-01-2018
 * Time: 12:41
 */

    require_once "api/userAPI.php";
    require_once __DIR__ . '/model/Users.php';
    //$userApi = new userAPI();
    //$method = $_SERVER['REQUEST_METHOD'];
    //$userApi->$method();

    ActiveRecord\Config::initialize(function($cfg)
    {
        $cfg->set_model_directory('.');
        $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/test'));
    });

    $user = Users::find(5);//find by id element?
    $user->email .= ";diego.gonzalez@grupogtd.com";
    $user->save();//update field
    $user= Users::find(5);

    $user = new Users();
    $user->id = null;
    $user->user = 'neeb';
    $user->email = 'neebUser@mial.com';
    $user->password = MD5('password');
    print_r(json_encode($user->email));

    print_r(json_encode(Users::first()->attributes()));

?>