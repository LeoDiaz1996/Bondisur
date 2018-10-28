<?php
/**
 *
 */

defined('BASEPATH') OR exit ('No direct script access allowed');

class Tramo extends CI_Model
{

  function __construct()
  {
/*  $this->id =$id;
    $this->idTramo=$idTramo;
    $this->ciudadInicioTramo=$ciudadInicioTramo;
    $this->ciudadFinTramo=$ciudadFinTramo;
    $this->precioTramo=$precioTramo;
    $this->distanciaTramo=$distanciaTramo;
    $this->tiempoEstimadoTramo=$tiempoEstimadoTramo;*/
    parent::__construct();

  }

  public function mostrarTramos()
  {
//  $this->db->select('id,idTramo,ciudadInicioTramo,ciudadFinTramo,precioTramo,distancioTramo,tiempoEstimadoTramo'):
    $this->db->from('tramo');
    $query=$this->db->get();
    if ($query->num_rows() > 0){
      return $query->result();

    }
else{return false;}

  }

public function mostrarCiudades()
{
//  $this->db->select('ciudadInicioTramo');
  $this->db->from('tramo');
  $query=$this->db->get();
  if ($query->num_rows() > 0){
    return $query->result();
  }
else{return false;}
}



}






?>
