<DOCTYPE! html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bondiloco</title>
    <!--<script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->

  </head>
  <body>
    <?php foreach ($tramos as $tramo): ?>
<h1><?= $tramo -> id ?></h1>
<h1><?= $tramo -> idTramo ?></h1>
<h1><?= $tramo -> ciudadInicioTramo ?></h1>
<h1><?= $tramo -> ciudadFinTramo ?></h1>
<h1><?= $tramo -> precioTramo ?></h1>
      <?php endforeach ?>



  </body>
</html>
