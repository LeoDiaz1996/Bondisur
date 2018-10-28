<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Ventas BondiSur</title>
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
    <div class="jumbotron jumbotron-fluid jumbo-venta">
      <div class="container">
        <h1 class="display-4 txt-carousel">Ventas</h1>
        <p class="lead">Administrá las venta de pasajes de BondiSur.</p>
      </div>
    </div>
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
                      <h2 class="centrado"><span><i class="fa fa-bus"></i> Venta de pasajes
                      </span>
                      </h2>
                      <br>
                    </div>
                  </div>
                  <div class="row">
                    <form class="col-12" action="index.html" method="post">
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
                              <option value="comodoro">Comodoro Rivadavia</option>
                              <option value="trelew">Trelew</option>
                              <option value="madryn">Puerto Madryn</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <h4>Destino</h4>
                            <select class="form-control" name="destino">
                              <option value="0"></option>
                              <option value="comodoro">Comodoro Rivadavia</option>
                              <option value="trelew">Trelew</option>
                              <option value="madryn">Puerto Madryn</option>
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
                          <button type="button" name="btnBuscar" class="btn btn-primary" data-toggle="modal" data-target=".modalBuscarViaje">
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
                      <p>Buscá los pasajes ingresando el dni del cliente o el numero de boleto</p>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <h4>Dni pasajero</h4>
                          <input type="number" name="dniPasajero" value="" class="form-control">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <h4>Nro. de boleto</h4>
                          <input type="number" name="numBoleto" value="" class="form-control">
                        </div>
                      </div>
                      <div class="col-4">
                        <button type="button" name="btnBuscarPasaje" class="btn btn-primary btn-lg mt-auto" data-toggle="modal" data-target=".modalBuscarPasaje">
                          <span> <i class="fas fa-search"></i>
                          </span>
                          Buscar
                        </button>
                      </div>
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
    <!-- Modal -->
    <div class="modal fade modalBuscarPasaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><span><i class="fas fa-map-marked-alt"></i></span> Pasajes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
