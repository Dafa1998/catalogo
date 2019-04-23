<?php 
class EmpresaController{

    public function __construct(){
        $action = Validate::getData('action');
        
        if($action=='view'){
            self::view();
        }
        elseif ($action=='delete') {
           self::delete(); 
        }
    }    

    public static function view(){
        $user = new empresa();
            $datosUser = $user->get();
            $datos = array('datos' => $datosUser);
            $datosHeader = array('title'=>'Users');
         View::load('header',$datosHeader);

         View::load('empresa',$datos);
        }
        public static function delete(){
            $id = Validate::getData('id');
            $user = new empresa();
            $user->delete($id);
            header("location:?url=empresa&action=view");
        }
    } 
        ?>