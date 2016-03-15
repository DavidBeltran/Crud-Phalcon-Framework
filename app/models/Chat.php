<?php

use Phalcon\Mvc\Model;

class Chat extends Model
{    
    protected $id;
    protected $nombre;
    protected $mensaje;
    protected $fecha;
    
    public function getData(){
        $sql = "SELECT chat.id, chat.nombre, chat.mensaje FROM chat";
        return $this->modelsManager->executeQuery($sql);
    }
    
}
