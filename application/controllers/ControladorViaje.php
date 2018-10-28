<?php /**
 *
 */
class ControladorViaje extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Tramo','tramo1');
  }

  public function index()
  {
    $data['ciudades']=$this->tramo1->mostrarCiudades();
    $this->load->view('cliente/index',$data);
  }

  public function mostrarViaje()
  {
    $this->load->view('compra/butacas');
  }

}
?>
