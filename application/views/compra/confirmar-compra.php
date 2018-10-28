<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirma de compra</title>
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
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item smooth-menu px-3">
                  <a class="nav-link" href="butacas.html">Pasajes</a>
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
  <div class="container">
    <div class="row">
      <div class="col-12">
        <br>
        <h1 class="centrado">
          <span>
            <i class="fas fa-check"></i>
          </span>
          Confirmación de compra</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <h5>Ciudad de Origen</h5>
          <p id="ciudadOrig">Ciudad Origen</p>
        </div>
        <div class="form-group">
          <h5>Ciudad de Destino</h5>
          <p id="ciudadDest">Ciudad Destino</p>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <h5>Fecha</h5>
              <p id="fecha">Ciudad Destino</p>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <h5>Hora</h5>
              <p id="hora">00:00hs</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <h5>Cantidad de pasajes</h5>
              <p id="cantiPasajes">2</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <h5>Precio</h5>
              <p id="precio">AR$ 0000,00</p>
            </div>
          </div>
        </div>
      </div><!--col datos compra-->
      <div class="col-6">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-primary" role="alert">
              Canjeá puntos por descuentos en tu compra.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" name="btnMostrarPuntos" class="btn btn-primary btn-lg  btn-block" data-toggle="modal" data-target=".modalCanjearPuntos">
              <span>
                <i class="fas fa-donate"></i>
              </span>
              Canjear puntos</button>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <br>
            <button type="button" name="btnMostrarPuntos" class="btn btn-success btn-lg  btn-block">
              <span>
                <i class=""></i>
              </span>
              Confirmar compra</button>
          </div>
        </div>
      </div>
    </div><!--row-->
  </div><!--container-->
</section>
<div class="modal fade modalCanjearPuntos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><span><i class="fas fa-donate"></i></span> Canjear puntos</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <h3>Tus puntos</h3>
              <label id="puntos">00000000</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <h3>Canjear</h3>
              <input type="number" name="cantidadPuntos" value="" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Canjear</button>
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
