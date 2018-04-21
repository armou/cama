<?php
/**
 * Created by PhpStorm.
 * User: armel
 * Date: 4/21/18
 * Time: 3:23 PM
 */

require '../core/router.php';

$router = new Router();

//echo get_class($router);


// Add routes
$router->addRoute('', ['controller' => 'Home', 'action' => 'index']);
$router->addRoute('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->addRoute('posts/new', ['controller' => 'Posts', 'action' => 'new']);


// Display routes
//echo '<pre>';
//var_dump($router->getRoute());
//echo '</pre>';

$url =  $_SERVER['REDIRECT_QUERY_STRING'];

var_dump($_SERVER);

if ($router->matchRoute($url)) {

    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo $url." not found";
}