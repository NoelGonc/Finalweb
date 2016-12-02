<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('tipo_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array();

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

    $data['tipo'] = $this->tipo_model->cargarTipo($id);

    $data['tipos'] = $this->tipo_model->listarTipos();


    $this->load->view('tipo\tipo',$data);
  }

  function guardar(){
    if($_POST){
      $this->tipo_model->guardarTipo($_POST);

    }else{
      echo "error";
    }
    $this->load->view('mensaje');
  }

  function borrar(){
    $id =(isset($_GET['id']))?$_GET['id']+0:0;

   $this->tipo_model->eliminarTipo($id);
    $this->load->view('mensajeTipo');
  }

}
