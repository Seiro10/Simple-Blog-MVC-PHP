<?php

namespace App\Controller;

use App\DB\SQLDB;
use App\Model\PostModel;

class PostController extends Controller
{

    public function __construct(){

        parent::__construct();
        $this->Model = $this->Util->getModel('Post');

    }


}