<?php

class CategoriaController 
{
public function __construct(){
  $action = Validate::getData('action');


    if($action == 'add'){
        self::add();
    //aqui llamamos la funcion
    }
    else{

      $categoria = new Categoria();
      $datosCategoria = $categoria->get();
      view::load('header', array('title' => 'Agregar Categoria'));
      view::load('categoriaAdd',array('errores' => [],'categorias'=>$datosCategoria ));

    }

}
private static function add(){
    $nombreCategoria = Validate::postData('categoria');
    $descripcion  = Validate::postData('descripcion');

    $error = false;
    $errores = [];

        if($nombreCategoria==null || strlen($nombreCategoria) <=0){
          $error = true;
          $errores[]='El nombre de la categoria es obligatorio'; 
        }

        if($descripcion==null || strlen($descripcion) <=0){
            $error = true;
            $errores[]='La descripcion de la categoria es obligatoria'; 
          }

       if( $error == true){
        $categoria = new Categoria();
        $datosCategoria = $categoria->get();
         view::load('header', array('title' => 'Agregar Categoria'));
         view::load('categoriaAdd', array('errores' => $errores,'categorias'=>$datosCategoria )); 
       } 

       else{
       /*crear una variable de session loguiado*/
      
       $categoria = new Categoria();
       $datos = array(
        'id_categoria'=>0,
        'categoria'=>$nombreCategoria,
        'descripcion'=>$descripcion);

        $categoria->set($datos);
      
        header('location: .');
       /*cargar las paginas de los usuarios loguiados*/

       }
}
}

?> 