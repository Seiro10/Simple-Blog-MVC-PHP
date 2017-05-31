<?php

namespace App\Router;

class Router
{

    private $url;
    private $routes = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($urlV,$controller,$action){

        $route = new Route($urlV,$controller,$action);
        $this->routes['GET'][] = $route;

    }


    public function exec(){

        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            var_dump($this->routes);
            throw  new \Exception('Une erreur est survenue');
        }

        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){

            if($route->match($this->url)){

                return $route->call();

            }
        }
        throw new \Exception('No Matching routes');
    }


}