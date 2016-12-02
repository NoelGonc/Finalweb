<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarTipo($tipo){

    $id = $tipo['id'];
    if($id+0 > 0){
      //actualizar
      $this->db->where('id=',$id);
      unset($tipo['id']);
      $this->db->update('tipo', $tipo);
    }else{

      $this->db->insert('tipo',$tipo);

    }
  }

  function listarTipos(){
    $query = $this->db->get('tipo');

    return $query->result();
  }


  function cargarTipo($id){
    $tipo = new stdclass();
    $tipo->id = 0;
    $tipo->nombre = "";


    $query = $this->db->where("id=",$id);
    $query = $this->db->get('tipo');

    $rs = $query->result();
    if(count($rs) > 0){
      $tipo = $rs[0];
    }

    return $tipo;

  }

  function eliminarTipo($id){
    $this->db->where('id=',$id);
    $this->db->delete('tipo');

  }

}
