<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmobi_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarInmobi($inmobi){

    $id = $inmobi['id'];
    if($id+0 > 0){
      //actualizar
      $this->db->where('id=',$id);
      unset($inmobi['id']);
      $this->db->update('inmobi', $inmobi);
    }else{

      $this->db->insert('inmobi',$inmobi);

    }

  }
 function listaInmobi(){


 $query = $this->db->get('inmobi');

 return $query->result();
 }


   function cargarInmobi($id){
     $inmobi = new stdclass();
     $inmobi->id = 0;
     $inmobi->titulo = "";
     $inmobi->direccion = "";
     $inmobi->tipo= "";
     $inmobi->precio = "";
     $inmobi->accion= "";
     $inmobi->descripcion= "";
     $inmobi->foto= "";

     $query = $this->db->where("id=",$id);
     $query = $this->db->get('inmobi');

     $rs = $query->result();
     if(count($rs) > 0){
       $inmobi = $rs[0];
     }

     return $inmobi;

   }

   function eliminarInmobi($id){
     $this->db->where('id=',$id);
     $this->db->delete('inmobi');

   }

   function listarTipos(){

     $query=$this->db->get('tipo');
     return $query->result();
   }
}
