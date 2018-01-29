<?php

/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 29-01-2018
 * Time: 9:10
 */
class Controller
{

    /**
     * Controller constructor.
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
}