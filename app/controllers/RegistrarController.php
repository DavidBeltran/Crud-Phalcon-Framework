<?php

use \Phalcon\Http\Request;

class RegistrarController extends ControllerBase
{   
    public function indexAction(){
        
    }
    
    public function registrarAction(){
        $request = new Request();
        $resp = array(); 
        if($request->isPost() && $this->request->isAjax()){
            $nombre = $request->getPost("nombre");
            $mensaje = $request->getPost("mensaje");
            $chat = new Chat();
            $chat->nombre = $nombre;
            $chat->mensaje = $mensaje;
            $chat->fecha = date('Y-m-d h:i:s'); 
            $resp["sms"]=($chat->save())?1:2;
        }else{
            $resp["sms"]=3;
        }
        echo die(json_encode($resp));
    }
    
    public function listarAction(){
        $mensajes = Chat::getData();
        $resp = ""; $overflow = "";
        if(count($mensajes)>0){
             $overflow = (count($mensajes)>5)?"style='overflow-y:scroll; height:300px;'" : "";
            $resp = $mensajes;
        }else{
            $resp = 0;
        }
         
        $this->view->resp = $resp;
        $this->view->overflow = $overflow;
    }

}
