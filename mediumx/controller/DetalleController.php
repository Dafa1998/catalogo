<?php 

class DetalleController
{

 public function __construct(){

    $action = Validate::getData('action');
    if($action == 'view'){
            self::view();
    }
 }
    private static function view(){
     $id = Validate::getData('id');
     $empresa = new empresa();

     $empresa->get($id);     
     $datosHeader = array('title'=>$empresa->nombre_empresa);

     $datosDetalle = array('title' => $empresa->nombre_empresa,
                            'descripcion'=>$empresa->descripcion,
                            'url_foto'=>$empresa->url_foto,
                            'direccion'=>$empresa->direccion,
                            'correo_electronico'=>$empresa->correo_electronico,
                            'telefono'=>$empresa->telefono);


     View::load('header',$datosHeader);
     View::load('detalle',$datosDetalle);
 }
}





?>