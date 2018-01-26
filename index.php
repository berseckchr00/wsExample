<?php
/**
 * Created by PhpStorm.
 * User: dgonzalezj
 * Date: 22-01-2018
 * Time: 14:51
 */

require __DIR__.'/vendor/autoload.php';
use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once('routes.php');

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\controller');

// Start the routing
SimpleRouter::start();