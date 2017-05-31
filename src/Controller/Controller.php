<?php


namespace App\Controller;


class Controller
{
    protected $Util;
    protected $Model;

    public function __construct(){

        if (empty($_SESSION)){

            session_start();
        }

        $this->Util = new \Util;

    }

    public function isLogged(){

        return isset($_SESSION['user']);

    }

    public function index($view){

        $this->Util->post = $this->Model->getAll();
        $this->Util->getView($view);

    }

    public function byId($id, $view){

        $this->Util->post = $this->Model->getOne($id);
        $this->Util->getView($view);
    }


}