<?php
 class Publication extends Model
  {
   public $id_empresa;
   public  $nombre_empresa;
   public  $descripcion;
   public  $url_foto;
   public  $direccion;
   public  $correo_electronico;
   public  $telefono;
   public  $id_categoria;
    public function  __construct(){
      $this->db_name="catalogo";
    }
public function set($datos = array()){
   foreach ($datos as $key => $value) {
     $$key = $value;
   }
   
   $this->query = "INSERT INTO tbl_empresa (id_empresa,nombre_empresa,descripcion,url_foto,direccion,correo_electronico,telefono,id_categoria)
   VALUES($id_empresa,'$nombre_empresa','$descripcion','$url_foto','$direccion','$correo_electronico','$telefono',$id_categoria)";
 
   
   $this->set_query();
}
public function get($id=''){
$this->query = ($id=='')?"SELECT * FROM tbl_empresas": "SELECT * FROM tbl_empresas WHERE id_empresa = $id";
$this->get_query();
if(count($this->rows)==1){
 foreach ($this->rows[0] as $key => $value) {
 $this->$key = $value;
 }
}
 return $this->rows;
}
public function getCat($id=''){
  $this->query="SELECT * FROM tbl_empresas  where id_categoria = $id";
  $this->get_query();
  return $this->rows;
}
public function delete($id=''){
  $this->query= "DELETE  FROM tbl_empresas  where id_empresa = $id";
  $this->set_query();
}
public function update($datos= array()){

foreach ($datos as $key => $value) {
 $$key = $value;

}
$this->query = "UPDATE tbl_empresas SET nombre_empresa='$nombre_empresa',descripcion='$descripcion',url_foto='$url_foto',
direccion='$direccion', correo_electronico='$correo_electronico',telefono='$telefono',id_categoria='$id_categoria' where id_empresa = $id_empresa";
$this->set_query();
}

  }