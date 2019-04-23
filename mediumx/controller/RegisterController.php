<?php 
class RegisterController {
    public function __construct(){
        $action =Validate::getData('action');

        if ($action == 'add'){
            self::add();
        }
        else{
        view::load('header', array('title'=>'Register'));
        view::load('register', array('errores'=>[]));
    }
}
private static function add(){
    $nombres = Validate::postData('nombres');
    $apellidos = Validate::postData('apellidos');
    $correo_electronico = Validate::postData('correo_electronico');
    $contraseña =  Validate::postData('contraseña');
    $error = false;
    $errores = [];
    $user = new User();
    $user->correo_electronico($correo_electronico);

    if (!Validate::isEmail($correo_electronico)) {
        $error = true;
        $errores[]='el dato no es de tipo email';
    }
    if($contraseña == null || strlen($contraseña)<=0){
        $error = true;
        $errores[]='el password es obligatorio';
    }
    if($nombres == null){
        $error = true;
        $errores[]='el nombre es obligatorio';
    }
    if($apellidos == null){
        $error = true;
        $errores[]='el apellido es obligatorio';
    }

    if($user->correo_electronico != null){
        $error = true;
        $errores[]='El correo ya esta en uso';
    }
    if ($error == true){
        view::load('header', array('title'=>'Register'));
        view::load('register', array('errores'=> $errores));
    }
    else {
        $datos = array('id_usuario' => 0, 'nombres'=>$nombres, 'apellidos'=>$apellidos,
         'correo_electronico'=>$correo_electronico,'contraseña'=>$contraseña,'id_rol'=>2 );
         $user->set($datos);
         

         $datosUser = $user->login(array('correo_electronico'=>$correo_electronico, 'contraseña'=>$contraseña));
         $_SESSION['user']=$datosUser[0];

         header('location: .');
    }
}
}
?>