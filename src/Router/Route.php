<?php

namespace App\Router;


class Route
{

    private $urlV;
    private $controller;
    private $action;
    private $matches =[];

    public function __construct($urlV, $controller,$action)
    {

        $this->urlV = trim($urlV , '/');
        $this->controller = $controller;
        $this->action = $action;
    }

    public function match($url)
    {
        $url = trim($url, '/');
        $urlV = preg_replace('#{([\w]+)}#' , '([^/]+)' , $this->urlV);
        $regex = "#^$urlV$#i";


        if(!preg_match($regex, $url, $matches)){

            return false;

        }

        array_shift($matches);

        $matches = str_replace('{', '', $matches);
        $matches = str_replace('}', '', $matches);

        $this->matches = $matches;

        return true;
    }

    public function call()
    {
        $controller = ucfirst($this->controller). 'Controller';
        $pathC = "App\\Controller\\".$controller;
        $controller = new $pathC();
        call_user_func_array([$controller ,$this->action],$this->matches);
    }

}