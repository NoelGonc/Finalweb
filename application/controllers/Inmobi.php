<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmobi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Inmobi_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array();

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

    $data['inmobi'] = $this->Inmobi_model->cargarInmobi($id);


  $data['inmobis'] = $this->Inmobi_model->listaInmobi();

  $data['tipos'] = $this->Inmobi_model->listarTipos();

    $this->load->view('inmobi\inmobi',$data);
  }


  //funcion para guardar los datos de los jugadores
  function guardar(){

    if($_POST){
      $this->Inmobi_model->guardarInmobi($_POST);
    }else{
      echo "Complete los Campos";
    }

    $this->load->view('mensaje');
  }


  function delete(){

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

   $this->Inmobi_model->eliminarInmobi($id);
   $this->load->view('mensaje');
  }
}
