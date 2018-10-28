<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class TramoControlador extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Tramo','tramo1');

  }
  public function index()
  {
/*
if(
    $this->tramo1->mostrarTramos()==false){

    }
    else{  $data['tramos']=$this->tramo1->mostrarTramos()
    }*/

     
    $data['tramos']= $this -> tramo1->mostrarTramos();
    $this->load->view('principal',$data);
  }
}




 ?>
