<?php

use \Phalcon\Http\Request;

class RegistrarController extends ControllerBase
{   
    public function indexAction(){
        $request = new Request();
        $resp = array(); 
        if($request->isPost() && $this->request->isAjax()){
            $nombre = $request->getPost("nombre");
            $mensaje = $request->getPost("mensaje");
            
        }else{
            $resp["sms"]=3;
        }
        
        
    }

}
