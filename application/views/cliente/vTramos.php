<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tramos</title>
</head>
<body>
  <?php
$data=array();
foreach ($tramos as $arreglo) {
  $data[]=$arreglo->id . ' - ' . $arreglo->idTramo . ' - ' . $arreglo->ciudadInicioTramo . ' - ' . $arreglo->ciudadFinTramo . ' - ';
}

echo ul($data);
  ?>
</body>
</html>
