<?php
class  HomeController
{
    public function __construct(){
            $empresa = new empresa();
            $datosEmpresa = $empresa->get();
            $datos = array('datos' => $datosEmpresa);
            $datosHeader = array('title'=>'header');
         View::load('header',$datosHeader);
         View::load('home',$datos);
    }
}
