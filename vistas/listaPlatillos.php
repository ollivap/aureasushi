<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "partes/head.php"; ?>
    <title>Consultar menu</title>
  </head>
  <body>
    <?php include  "partes/menu.php"?>
    <a href="controladores/nuevoPlatillo.php">Agregar platillo</a>
    <input type="button" name="Habilitar" value="Habilitar" onclick="document.platillos.operacion.value='habilitar'; document.platillos.submit();">
    <input type="button" name="Habilitar" value="Deshabilitar" onclick="document.platillos.operacion.value='deshabilitar'; document.platillos.submit();">
    <input type="button" name="Habilitar" value="Eliminar" onclick="document.platillos.operacion.value='eliminar'; document.platillos.submit();">
    <h1> Menu </h1>
    <form name="platillos" class="" action="#" method="get">
      <table>
        <tr>
          <td>Hab/des</td>
          <td>Nombre del platillo</td>
          <td>Costo</td>
          <td>Descripcion de platillo</td>
          <td>Editar platillo</td>
        </tr>
        <input type="hidden" name="operacion" value="">
        <?php

        $listadoPlatillos->data_seek(0);
        while ($fila = $listadoPlatillos->fetch_assoc()) {
          echo "<tr>";
          echo "<td><input name='".$fila['platillo_id']."' type='checkbox'></td>".
          "<td>".$fila['nombre'] ."</td>".
          "<td>".$fila['costo'] ."</td>".
          "<td>".$fila['descripcion']."</td>".
          "<td><a href='editarPlatillo.php?platillo_id=".$fila['platillo_id']."'>Editar</a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </form>

    <?php include  "partes/piePagina.php"?>
  </body>
</html>
