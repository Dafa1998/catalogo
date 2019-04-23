<?php 
class user extends Model
{
    public $id_usuario;
    public $nombres;
    public $apellidos;
    public $correo_electronico;
    public $contraseña;
    public $id_rol;

    public function __construct(){
        $this->db_name="catalogo";
    }
    
    public  function set($datos = array()){
        foreach ($datos as $key => $value){
            $$key = $value;
        }
        $this->query ="INSERT INTO tbl_usuarios (id_usuario,nombres,apellidos,correo_electronico,contraseña,id_rol)
                      VALUES ($id_usuario,'$nombres','$apellidos','$correo_electronico',MD5('$contraseña'),'$id_rol')";
                      $this->set_query();

    }
    public  function get($id=''){
        $this->query=($id=='')? "SELECT * FROM tbl_usuarios": "SELECT * FROM tbl_usuarios where id_usuario = $id AND eliminado='N' ";
        $this->get_query();
        if(count($this->rows)==1){
            foreach ($this->rows [0] as $key => $value){
                $this->$key = $value;
            }
        }
        return $this->rows;
    }
    public  function delete($id=''){
        $this->query= "DELETE FROM tbl_usuarios WHERE id_usuario = $id";
        $this->set_query();

        }
        public  function update($datos = array()){

            foreach ($datos as $key => $value){
                $$key = $value;
            }
            $this->query ="UPDATE  tbl_usuarios SET  id_usuario= $id_usuario,nombres='$nombres',apellidos='$apellidos',correo_electronico= $correo,contraseña=MD5('$contraseña'),id_role=$id_rol 
            where id_usuario = $id_usuario";           
         $this->set_query();
        }

        public function login($datos =array()){ 
           foreach ($datos as $key => $value) {
               $$key=$value;
           }
           $this->query = "SELECT * FROM tbl_usuarios WHERE correo_electronico = '$correo_electronico' and contraseña = MD5('$contraseña')";
           $this->get_query();
           if(count( $this->rows)==1){
               foreach ($this->rows[0] as $key => $value) {
                   $this->$key = $value;
               }
           }
           return $this->rows;
    }



    public function correo_electronico($correo_electronico=''){ 
        
        $this->query = "SELECT * FROM tbl_usuarios WHERE correo_electronico = '$correo_electronico'";
        $this->get_query();
        if(count( $this->rows)==1){
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        return $this->rows;
 }
}
    

