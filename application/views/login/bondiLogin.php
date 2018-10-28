<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="body-login">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">
          <div class="container py-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBondiSur" aria-controls="navbarBondiSur" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarBondiSur">
              <a class="navbar-brand" href="index.html">
              <img src="css/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              BondiSur
              </a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active  px-3">
                  <a class="nav-link primary" href="index.html">
                    <span>
                      <i class="fas fa-undo"></i>
                    </span> Inicio <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </header>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">
          <div class="col-12 user-img">
            <img src="css/img/logo.png" alt="">
          </div>
          <form class="col-12" action="index.html" method="post">
            <div class="form-group">
              <input type="text" name="nombreUsr" value="" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group">
              <input type="password" name="cotraseñaUsr" value="" class="form-control" placeholder="Contraseña">
            </div>
            <button type="button" name="button" class="btn btn-outline-primary">
              <span><i class="fas fa-sign-in-alt"></i></span>
              Ingresar
            </button>
          </form>
          <div class="col-12 nueva-cuenta">
            <a href="#">No tengo cuenta y deseo crear una</a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
