<?php
/**
 * Created by PhpStorm.
 * User: armel
 * Date: 4/21/18
 * Time: 3:39 PM
 */

class Router {


    protected $routes = [];


    public function addRoute($route, $params) {
        $this->routes[$route] = $params;
    }

    public function getRoute() {
        return $this->routes;
    }


}