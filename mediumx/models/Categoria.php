<?php
class Categoria extends  Model
{
  public $id_categoria;
  public $categoria;
  public $descripcion;


    public function __construct(){
      $this->db_name="catalogo";
    }
    public function set($datos = array()){
        foreach ($datos as $key => $value) {
          $$key = $value; 
        }
        $this->query = "INSERT INTO  tbl_categoria (id_categoria,categoria,descripcion)
          VALUES($id_categoria,'$categoria','$descripcion')";

          $this->set_query();
    }
    public function get($id=''){
      $this->query = ($id=='')?"SELECT * FROM tbl_categoria": "SELECT * FROM tbl_categoria WHERE id_categoria = $id";
      $this->get_query();
      if(count($this->rows)==1){
       foreach ($this->rows[0] as $key => $value) {
       $this->$key = $value;
       }
      }
      return $this->rows;
    }
    
    public function delete($id=''){
        $this->query = "DELETE FROM tbl_categoria WHERE id_categoria = $id";
        $this->set_query();
    }
    public function update(){}
  
}