<?php

namespace App\Model;

use App\DB\SQLDB;


class Model
{
    
    protected $db;

    public function __construct(SQLDB $db){

        $this->db = $db;

    }

    public function getAll(){

        return $this->db->query('SELECT * FROM article');

    }


    public function getOne($id){

        return $this->db->prepare('SELECT * FROM article WHERE id = ?', [$id]);

    }
}