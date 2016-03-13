<?php

use Phalcon\Mvc\Controller;

class RegistrarController extends Controller
{
    public function indexAction(){
        $nombre = count($this->request->getPost());
        echo $nombre;
    }

}
