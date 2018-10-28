<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administracion BondiSur</title>
    <!--datepicker.css-->
    <link rel="stylesheet"  href="css/datepicker.css" >
    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--responsive.css-->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/style.css">
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
                <li class="nav-item active px-3">
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item px-3">
                  <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                      <span>
                        <i class="fas fa-sign-out-alt"></i>
                      </span>
                      Salir
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </header>

    <div class="jumbotron jumbotron-fluid jumbo-admin">
      <div class="container centrado">
        <h1 class="display-4 txt-carousel">Administración</h1>
        <p class="lead">Administra BondiSur en simples pasos.</p>
      </div>
    </div>


    <section class="tabla-navegacion">
      <div class="container tabla-ppal-contenido">
        <div class="row">
          <div class="col-12">
            <div role="tabpanel">
              <ul class="nav nav-tabs nav-fill nav-ppal" role="tablist">
                  <li class="nav-item active" role="presentation">
                    <a class="nav-link" href="#trayectos" aria-controls="trayectos" data-toggle="tab" role="tab"><span><i class="fa fa-globe"></i></span> Trayectos</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#puntos" aria-controls="puntos" data-toggle="tab" role="tab"><span><i class="fa fa-calculator"></i></span> Gestión de puntos</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#abordos" aria-controls="abordos" data-toggle="tab" role="tab"><span><i class="fa fa-list"></i></span> Abordos</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#informes" aria-controls="informes" data-toggle="tab" role="tab"><span><i class="fas fa-poll"></i></span> Informes</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="trayectos">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <h2 class="centrado"><span><i class="fa fa-globe"></i></span> Modificar trayectos</h2>
                        <br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th>#</th>
                              <th>
                                CIUDAD INICIO
                              </th>
                              <th>
                                CIUDAD FIN
                              </th>
                              <th>
                                FRECUENCIA
                              </th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>1</th>
                              <td>Ciudad inicio</td>
                              <td>Ciudad fin</td>
                              <td>
                                <div class="travel-select-icon">
                                  <select class="form-control ">

                                      <option value="default"></option><!-- /.option-->

                                      <option value="9">9:00hs</option><!-- /.option-->

                                      <option value="20">20:00hs</option><!-- /.option-->


                                  </select><!-- /.select-->
                                </div><!-- /.travel-select-icon -->
                              </td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalModificarTrayecto">
                                          <span>
                                            <i class="far fa-edit"></i>
                                          </span>
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th>2</th>
                              <td>Ciudad inicio</td>
                              <td>Ciudad fin</td>
                              <td>
                                <div class="travel-select-icon">
                                  <select class="form-control ">

                                      <option value="default"></option><!-- /.option-->

                                      <option value="9">9:00hs</option><!-- /.option-->

                                      <option value="20">20:00hs</option><!-- /.option-->


                                  </select><!-- /.select-->
                                </div><!-- /.travel-select-icon -->
                              </td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalModificarTrayecto">
                                          <span>
                                            <i class="far fa-edit"></i>
                                          </span>
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th>3</th>
                              <td>Ciudad inicio</td>
                              <td>Ciudad fin</td>
                              <td>
                                <div class="travel-select-icon">
                                  <select class="form-control ">

                                      <option value="default"></option><!-- /.option-->

                                      <option value="9">9:00hs</option><!-- /.option-->

                                      <option value="20">20:00hs</option><!-- /.option-->


                                  </select><!-- /.select-->
                                </div><!-- /.travel-select-icon -->
                              </td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalModificarTrayecto">
                                          <span>
                                            <i class="far fa-edit"></i>
                                          </span>
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="puntos">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <h2 class="centrado"><span><i class="fa fa-calculator"></i></span> Gestión de puntos</h2>
                        <br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th>#</th>
                              <th>Rango de precio</th>
                              <th>Porcentaje en puntos</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>1</th>
                              <td>$1000-$1500</td>
                              <td><div class="travel-select-icon">
                                <select class="form-control ">
                                    <option value="default"></option><!-- /.option-->
                                    <option value="10">10%</option><!-- /.option-->
                                    <option value="15">15%</option><!-- /.option-->
                                    <option value="20">20%</option><!-- /.option-->
                                    <option value="25">25%</option><!-- /.option-->
                                </select><!-- /.select-->
                              </div><!-- /.travel-select-icon -->
                            </td>
                            </tr>
                            <tr>
                              <th>2</th>
                              <td>$2500-$3000</td>
                              <td><div class="travel-select-icon">
                                <select class="form-control ">

                                    <option value="default"></option><!-- /.option-->
                                    <option value="10">10%</option><!-- /.option-->
                                    <option value="15">15%</option><!-- /.option-->
                                    <option value="20">20%</option><!-- /.option-->
                                    <option value="25">25%</option><!-- /.option-->

                                </select><!-- /.select-->
                              </div><!-- /.travel-select-icon -->
                            </td>
                            </tr>
                            <tr>
                              <th>3</th>
                              <td>$3000-$3500</td>
                              <td><div class="travel-select-icon">
                                <select class="form-control ">

                                    <option value="default"></option><!-- /.option-->
                                    <option value="10">10%</option><!-- /.option-->
                                    <option value="15">15%</option><!-- /.option-->
                                    <option value="20">20%</option><!-- /.option-->
                                    <option value="25">25%</option><!-- /.option-->

                                </select><!-- /.select-->
                              </div><!-- /.travel-select-icon -->
                            </td>
                            </tr>
                            <tr>
                              <th>4</th>
                              <td>$3500-$4000</td>
                              <td><div class="travel-select-icon">
                                <select class="form-control ">

                                    <option value="default"></option><!-- /.option-->
                                    <option value="10">10%</option><!-- /.option-->
                                    <option value="15">15%</option><!-- /.option-->
                                    <option value="20">20%</option><!-- /.option-->
                                    <option value="25">25%</option><!-- /.option-->

                                </select><!-- /.select-->
                              </div><!-- /.travel-select-icon -->
                            </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div><!--row-->
                    <div class="row">
                      <div class="col-2 ml-auto">
                          <button  class="btn btn-primary btn-lg">
                            <span><i class="fa fa-check"></i>
                            </span>Guardar
                          </button><!--/.travel-btn-->
                      </div><!--/.col-->
                    </div>
                  </div><!--tab-pane-->
                  <div role="tabpanel" class="tab-pane" id="abordos">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <h2 class="centrado"><span><i class="fa fa-list"></i></span> Confirmación de abordo de pasajeros</h2>
                        <br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th>#</th>
                              <th>Hora</th>
                              <th>Ciudad de partida</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>00:00hs</td>
                              <td>Ciudad partida</td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalConfirmarPasajeros">
                                          <span>
                                            <i class="fa fa-bus"></i>
                                          </span> Confirmar
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>00:00hs</td>
                              <td>Ciudad partida</td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalConfirmarPasajeros">
                                          <span>
                                            <i class="fa fa-bus"></i>
                                          </span> Confirmar
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>00:00hs</td>
                              <td>Ciudad partida</td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalConfirmarPasajeros">
                                          <span>
                                            <i class="fa fa-bus"></i>
                                          </span> Confirmar
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>00:00hs</td>
                              <td>Ciudad partida</td>
                              <td>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modalConfirmarPasajeros">
                                          <span>
                                            <i class="fa fa-bus"></i>
                                          </span> Confirmar
                                        </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="informes">
                    <div class="row">
                      <div class="col-12">
                        <br>
                        <h2 class="centrado"><span><i class="fas fa-poll"></i></span> Informes</h2>
                        <br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <h3>Destinos más visitados</h3>
                        <div class="image">
                          <img src="" alt="">
                        </div>
                      </div>
                      <div class="col-6">
                        <h3>Pasajes por trimestre</h3>
                        <div class="image">
                          <img src="" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="row">
                          <div class="col-4">
                            <div class="form-group">
                              <div class="">
                                <h4>Desde</h4>
                                <div>
                                  <form action="#">
                                    <input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="fecha inicio">
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><!--/.col-->
                          <div class="col-4">
                            <div class="form-group">
                              <div class="">
                                <h4>Hasta</h4>
                                <div>
                                  <form action="#">
                                    <input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="fecha fin">
                                  </form>
                                </div><!-- /.travel-check-icon -->
                              </div><!--/.single-tab-select-box-->
                            </div><!--/.single-tab-select-box-->
                          </div><!--/.col-->
                          <div class="col-4">
                            <div class="form-group">
                              <button type="button" name="button" class="btn btn-primary">Calcular</button>
                            </div>
                          </div>
                        </div>
                        </div><!--row-->

                      <div class="col-6">
                        <div class="row">
                          <div class="form-group ml-auto">
                            <button type="button" name="button" class="btn btn-primary">Calcular</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div><!--tab pane-->
                </div><!--tab content-->
            </div>
          </div>
        </div><!-- row -->
    </div><!--container-->
    <!-- Modal -->
    <div class="modal" id="modalModificarTrayecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><span><i class="fa fa-globe"></i></span> Modificar trayecto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Id Trayecto</h4>
                  <label>id_trayecto</label>
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Frecuencia</h4>
                  <label>frecuencia</label>
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Ciudad Inicio</h4>
                  <label>Ciudad inicio</label>
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Ciudad Fin</h4>
                  <label>Ciudad fin</label>
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Autobus</h4>

                  <div class="travel-select-icon">
                    <select class="form-control ">

                        <option value="default">autobus</option><!-- /.option-->

                        <option value="1">1</option><!-- /.option-->

                        <option value="2">2</option><!-- /.option-->
                        <option value="3">3</option><!-- /.option-->

                    </select><!-- /.select-->
                  </div><!-- /.travel-select-icon -->
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-tab-select-box">

                  <h4>Choferes</h4>

                  <div class="travel-select-icon">
                    <select class="form-control " multiple="multiple">

                        <option value="default">choferes</option><!-- /.option-->

                        <option value="1">Leo</option><!-- /.option-->

                        <option value="2">Francisco</option><!-- /.option-->
                        <option value="3">David</option><!-- /.option-->

                    </select><!-- /.select-->
                  </div><!-- /.travel-select-icon -->
                </div><!--/.single-tab-select-box-->
              </div><!--/.col-->
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">
              <span><i class="fa fa-check"></i>
              Modificar</button>
          </div>
          </div>
        </div>
      </div>
    <<!-- Fin Modal -->
    <!-- Modal -->
    <div class="modal" id="modalConfirmarPasajeros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><span><i class="fas fa-users"></i></span> Pasajeros</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Número de boleto</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>dni</td>
                  <td>nombre</td>
                  <td>apellido</td>
                  <td>boleto</td>
                  <td>
                      <button type="submit" class="btn btn-success">
                        <span>
                          <i class="fas fa-check"></i>
                        </span>
                      </button>
                  </td>
                </tr>
                <tr>
                  <td>dni</td>
                  <td>nombre</td>
                  <td>apellido</td>
                  <td>boleto</td>
                  <td>

                      <button type="submit" class="btn btn-success">
                        <span>
                          <i class="fas fa-check"></i>
                        </span>
                      </button>

                  </td>
                </tr>
                <tr>
                  <td>dni</td>
                  <td>nombre</td>
                  <td>apellido</td>
                  <td>boleto</td>
                  <td>

                      <button type="submit" class="btn btn-success">
                        <span>
                          <i class="fas fa-check"></i>
                        </span>
                      </button>

                  </td>
                </tr>
                <tr>
                  <td>dni</td>
                  <td>nombre</td>
                  <td>apellido</td>
                  <td>boleto</td>
                  <td>

                      <button type="submit" class="btn btn-success">
                        <span>
                          <i class="fas fa-check"></i>
                        </span>
                      </button>

                  </td>
                </tr>
                <tr>
                  <td>dni</td>
                  <td>nombre</td>
                  <td>apellido</td>
                  <td>boleto</td>
                  <td>

                      <button type="submit" class="btn btn-success">
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

  </body>
</html>
