<?php
/**
 * Created by PhpStorm.
 * User: fredux
 * Date: 03/07/16
 * Time: 23:48
 */

namespace SON\Init;


abstract class Bootstrap {
    private $routes;

    function __construct()
    {
        $this->initRoutes();

    }
    abstract protected function initRoutes();

    protected function run($url)
    {
        array_walk($this->routes, function($route) use ($url)
        {

            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;

    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }


}