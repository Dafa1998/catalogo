<?php

class PublicationController 
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
      view::load('header', array('title' => 'Agregar Empresa'));
      view::load('publicationAdd',array('errores' => [],'categorias'=>$datosCategoria ));

    }

}
private static function add(){
    $nombre_empresa = Validate::postData('nombreEmpresa');
    $descripcion  = Validate::postData('descripcion');
    $direccion  = Validate::postData('direccion');
    $correo_electronico  = Validate::postData('correo_electronico');
    $telefono  = Validate::postData('telefono');
    $id_categoria  = Validate::postData('idCategoria');
    $foto = $_FILES['foto'];

    $error = false;
    $errores = [];

      if(!Validate::isEmail($correo_electronico)){
        $error = true;
        $errores[]='El dato no es de tipo Email';
      }
        if($nombre_empresa==null || strlen($nombre_empresa) <=0){
          $error = true;
          $errores[]='El nombre de la empresa es obligatorio'; 
        }

        if($descripcion==null || strlen($descripcion) <=0){
            $error = true;
            $errores[]='La descripcion de la empresa es obligatoria'; 
          }
        
          if($_FILES['foto']['type'] != 'image/jpeg'){
            $error = true;
            $errores[]='el formato de archivo no es correcto'; 
          }

         
          if($_FILES['foto']['error'] >= 1) {
            $error = true;
            $errores[]='error al cargar'; 
          }
        
          if($direccion==null || strlen($direccion) <=0){
            $error = true;
            $errores[]='La direccion de la empresa es obligatorio'; 
          }

          if($telefono==null || strlen($telefono) <=0){
            $error = true;
            $errores[]='El telefono de la empresa es obligatorio'; 
          }

          if($id_categoria==null || strlen($id_categoria) <=0){
            $error = true;
            $errores[]='La categoria de la empresa es obligatoria';  
          }

       if( $error == true){
        $categoria = new Categoria();
        $datosCategoria = $categoria->get();
         view::load('header', array('title' => 'Agregar Empresa'));
         view::load('publicationAdd', array('errores' => $errores,'categorias'=>$datosCategoria )); 
       } 

       else{
       /*crear una variable de session loguiado*/
      
         $img_name = uniqid('img_',true).'.jpg';
        move_uploaded_file($foto['tmp_name'], 'public/img/'.$img_name);
      
       $publication = new Publication();
       $datos = array(
        'id_empresa'=>0,
        'nombre_empresa'=>$nombre_empresa,
        'descripcion'=>$descripcion,
        'url_foto'=>$img_name,
        'direccion'=>$direccion,
        'correo_electronico'=>$correo_electronico,
        'telefono'=>$telefono,
        'id_categoria'=>$id_categoria);
        
        $publication->set($datos);
      
        header('location: .');
       /*cargar las paginas de los usuarios loguiados*/

       }
}
}

?> 