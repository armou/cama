<?php
/**
 * Created by PhpStorm.
 * User: armel
 * Date: 4/21/18
 * Time: 3:39 PM
 */

class Router {


    protected $routes = [];

    protected $params = [];


    public function addRoute($route, $params) {
        $this->routes[$route] = $params;
    }

    public function getRoute() {
        return $this->routes;
    }

    public function matchRoute($url) {
        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-])$/"
//        foreach ($this->routes as $route => $params) {
//            if ($url == $route) {
//                $this->params = $params;
//                return true;
//            }
//        }
        if (preg_match($reg_exp, $url, $matches)) {
            $params [];
            foreach ($matches as $key => $params) {
                if (is_string($key)) {
                    $params[$key] = $match;
                }
            }

            $this->params = $params;
            return true;

        }
        return false;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}