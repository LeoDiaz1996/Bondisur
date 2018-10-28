<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BondiSur</title>
    <!--font-awesome.min.css-->

    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--responsive.css-->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/bootstrap-datepicker3.css" >
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">
          <div class="container py-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBondiSur" aria-controls="navbarBondiSur" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarBondiSur">
              <a class="navbar-brand" href="#">
              <img src="css/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              BondiSur
              </a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active smooth-menu px-3">
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item smooth-menu px-3">
                  <a class="nav-link" href="#">Pasajes</a>
                </li>
                <li class="nav-item smooth-menu px-3">
                  <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                      <span>
                        <i class="far fa-user-circle"></i>
                      </span>
                      Ingresar
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </header>

    <section>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="css/img/banner1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="centrado">
                <h1 class="txt-carousel">Pagá en cuotas</h1>
                <h3>Con tu tarjeta de crédito</h3>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="css/img/banner3.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="centrado">
                <h1 class="txt-carousel">Administrá</h1>
                <h3>tus pasajes</h3>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="css/img/banner2.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="centrado">
                <h1 class="txt-carousel">Canjeá</h1>
                <h3>tus puntos por descuentos en viajes</h3>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
    <section>
      <div class="container tabla-ppal-contenido">
        <div class="row">
          <div class="col-12">
            <div class="tabpanel">
              <ul class="nav nav-tabs nav-fill nav-ppal" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" aria-controls="viajes" data-toggle="tab" role="tab"href="#viajes">
                    <span><i class="fa fa-bus"></i>
                </span> Viajes
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" aria-controls="pasajes" data-toggle="tab" role="tab" href="#pasajes">
                    <span> <i class="fa fa-map"></i>
                    </span>
                    Pasajes</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="viajes">
                  <div class="row">
                    <div class="col-12">
                      <br>

                      <h2 class="centrado"><span><i class="fa fa-bus"></i> Comprá tu pasaje
                      </span>
                      </h2>
                      <br>
                    </div>
                  </div>
                  <div class="row">

                    </form>
                    <form class="col-12" action=<?php echo base_url(); ?>index.php/ControladorViaje/mostrarViaje method="post">
                      <div class="row">
                        <div class="col-4">
                          <input type="radio" name="radio" value="ida"><h5>Ida</h5>
                        </div>
                        <div class="col-4">
                          <input type="radio" name="radio" value="idaYVuelta"><h5>Ida y vuelta</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Origen</h4>
                            <select class="form-control" name="origen">
                              <option value="0"></option>
                              <?php foreach ($ciudades as $ciudad) :?>
                              <option value=<?= $ciudad->ciudadInicioTramo ?>><?= $ciudad->ciudadInicioTramo ?></option>
                            <?php endforeach;?>
                            </select>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Destino</h4>
                            <select class="form-control" name="destino">
                              <option value="0"></option>
                              <?php
                               foreach ($ciudades as $ciudad) :?>

                              <option value=<?= $ciudad->ciudadInicioTramo ?>><?= $ciudad->ciudadInicioTramo ?></option>
                            <?php endforeach;?>
                            </select>

                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Confort</h4>
                            <select class="form-control" name="confort">
                              <option value="0"></option>
                              <option value="cama">Coche cama</option>
                              <option value="semi">Semi cama</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Salida</h4>
                            <div class="input-group date form-fecha input-fecha">
                              <input type="text" class="form-control"><span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Regreso</h4>
                            <div class="input-group date form-fecha input-fecha">
                                <input type="text" class="form-control"><span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Cantidad de pasajeros</h4>
                            <input type="number" name="" value="" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-1 ml-auto">
                          <button type="submit" name="btnBuscar" class="btn btn-primary" data-toggle="modal" data-target=".modalBuscarViaje">

                            <span> <i class="fas fa-search"></i>
                            </span>
                            Buscar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="pasajes">
                  <div class="container">
                    <div class="alert alert-warning" role="alert">
                      <p> Para ver los pasajes comprados debes iniciar sesión.</p>
                      <a href="bondiLogin.html">Iniciar sesión</a>
                    </div>
                    <div class="row">
                      <table class="table table-striped">
                        <thead class="thead-light">
                          <tr>
                            <th>#</th>
                            <th>Ciudad Origen</th>
                            <th>Ciudad Destino</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th></th><th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>1</th>
                            <td>Ciudad origen</td>
                            <td>Ciudad destino</td>
                            <td>dd/mm/yyyy</td>
                            <td>00:00hs</td>
                            <td>
                              <button type="submit" name="btnImprimir" class="btn btn-dark">
                                <span>
                                  <i class="fas fa-print"></i>
                                </span>
                              </button>
                            </td>
                            <td>
                              <button type="submit" name="btnCancelar" class="btn btn-danger">
                                <span>
                                  <i class="fas fa-ban"></i>
                                </span>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th>1</th>
                            <td>Ciudad origen</td>
                            <td>Ciudad destino</td>
                            <td>dd/mm/yyyy</td>
                            <td>00:00hs</td>
                            <td>
                              <button type="submit" name="btnImprimir" class="btn btn-dark">
                                <span>
                                  <i class="fas fa-print"></i>
                                </span>
                              </button>
                            </td>
                            <td>
                              <button type="submit" name="btnCancelar" class="btn btn-danger">
                                <span>
                                  <i class="fas fa-ban"></i>
                                </span>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th>1</th>
                            <td>Ciudad origen</td>
                            <td>Ciudad destino</td>
                            <td>dd/mm/yyyy</td>
                            <td>00:00hs</td>
                            <td>
                              <button type="submit" name="btnImprimir" class="btn btn-dark">
                                <span>
                                  <i class="fas fa-print"></i>
                                </span>
                              </button>
                            </td>
                            <td>
                              <button type="submit" name="btnCancelar" class="btn btn-danger">
                                <span>
                                  <i class="fas fa-ban"></i>
                                </span>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade modalBuscarViaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><span><i class="fas fa-map-marked-alt"></i></span> Viajes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead class="">
                <tr>
                  <th>#</th>
                  <th>Ciudad Origen</th>
                  <th>Ciudad Destino</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Precio</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Ciudad O</td>
                  <td>Ciudad D</td>
                  <td>dd/mm/yyyy</td>
                  <td>00:00hs</td>
                  <td>AR$0000,00</td>
                  <td>
                    <button type="submit" class="btn btn-primary btn-sm " >
                      <span>
                        <i class="fas fa-check"></i>
                      </span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <th>1</th>
                  <td>Ciudad O</td>
                  <td>Ciudad D</td>
                  <td>dd/mm/yyyy</td>
                  <td>00:00hs</td>
                  <td>AR$0000,00</td>
                  <td>
                    <button type="submit" class="btn btn-primary btn-sm " >
                      <span>
                        <i class="fas fa-check"></i>
                      </span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <th>1</th>
                  <td>Ciudad O</td>
                  <td>Ciudad D</td>
                  <td>dd/mm/yyyy</td>
                  <td>00:00hs</td>
                  <td>AR$0000,00</td>
                  <td>
                    <button type="submit" class="btn btn-primary btn-sm" >
                      <span>
                        <i class="fas fa-check"></i>
                      </span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <th>1</th>
                  <td>Ciudad O</td>
                  <td>Ciudad D</td>
                  <td>dd/mm/yyyy</td>
                  <td>00:00hs</td>
                  <td>AR$0000,00</td>
                  <td>
                    <button type="submit" class="btn btn-primary btn-sm" >
                      <span>
                        <i class="fas fa-check"></i>
                      </span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
          </div>
        </div>
      </div>
    <<!-- Fin Modal -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-4 centrado">
            <h1>
              <i class="fas fa-credit-card"></i>
            </h1>
            <p>Pagá en cuotas</p>

          </div>
          <div class="col-4 centrado">
            <h1>
              <i class="fas fa-globe-americas"></i>
            </h1>
            <p>Administrá tus pasajes</p>

          </div>
          <div class="col-4 centrado">
            <h1>
              <i class="fas fa-donate"></i>
            </h1>
            <p>Canjeá tus puntos por descuentos en viajes</p>

          </div>
        </div>
      </div>
    </section>

<section>
<div>



</div>
</section>




    <footer class="page-footer font-small teal pt-4">
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="Index.html">BondiSur</a>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script  src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/app-date.js"></script>
  </body>
</html>
