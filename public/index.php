<?php
/**
 * Created by PhpStorm.
 * User: armel
 * Date: 4/21/18
 * Time: 3:23 PM
 */

require '../core/router.php';

$router = new Router();

echo get_class($router);


// Add routes
$router->addRoute('', ['controller' => 'Home', 'action' => 'index']);
$router->addRoute('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->addRoute('posts/new', ['controller' => 'Posts', 'action' => 'new']);

// Display routes
echo '<pre>';
var_dump($router->getRoute());
echo '</pre>';

//echo "requested URI = ". $_SERVER['QUERY_STRING'] . "!";