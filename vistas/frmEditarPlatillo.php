<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "partes/head.php"; ?>
      <link rel="stylesheet" href="aureasushi/public/css/estilo.css">
    <title></title>
  </head>
  <body>
    <?php include  "partes/menu.php"?>
    <form enctype="multipart/form-data" action="#" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value=""> <br>
      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion"><br>
      <label for="foto">Foto</label>
      <input type="file" name="foto" value=""><br>
      <label for="costo">Costo</label>
      <input type="text" name="costo" value=""><br>
      <label for="curp_admon_alta">Empleado</label>
      <select class="" name="curp_admon_alta">
        <option value="VIFL951203MDFLGCA09">Lucia Dioselyn</option>
      </select><br>
      <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php include  "partes/piePagina.php"?>
  </body>
</html>
