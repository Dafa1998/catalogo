<?php
class  CatalogoController
{
    public function __construct(){
            $categoria = new Categoria();
            $datosCategoria = $categoria->get();
            $dato = array('dato' => $datosCategoria);
            $empresa = new empresa();
		$id=Validate::getData('id');
            $datosEmpresa = $empresa->getCat($id);
            $datos = array('datos' => $datosEmpresa);
            $datosHeader = array('title'=>'header');
         View::load('header',$datosHeader);
         View::load('categorias',$dato);
         View::load('home',$datos);
    }
}