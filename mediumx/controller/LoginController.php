<?php

class LoginController 
{
public function __construct(){
  $action = Validate::getData('action');


    if($action == 'login'){
    self::login();
    //aqui llamamos la funcion
    }
    else{
        view::load('header', array('title' => 'login'));
      view::load('login',array('errores' => []));

    }

}
private static function Login(){
    $correo_electronico = Validate::postData('correo_electronico');
    $contraseña  = Validate::postData('contraseña');
   

    $error = false;
    $errores = [];
    $roles = new User();
    $datosUser = $roles->login( array('correo_electronico'=>$correo_electronico,'contraseña'=>$contraseña));

      if(!Validate::isEmail($correo_electronico)){
        $error = true;
        $errores[]='El dato no es de tipo Email';
      }
        if($contraseña==null || strlen($contraseña) <=0){
          $error = true;
          $errores[]='El password es obligatorio'; 
          
        }
        if($roles->correo_electronico == null){
                $error = true;
                $errores[]='El email y/o el password son incorectos'; 
    }

       if( $error == true){
         view::load('header', array('title' => 'login'));
         view::load('login', array('errores' => $errores)); 
       } 
       else{
       /*crear una variable de session loguiado*/
      
       $_SESSION['user'] = $datosUser[0];
        header('location: .');
       /*cargar las paginas de los usuarios loguiados*/

       }
}
}

?>