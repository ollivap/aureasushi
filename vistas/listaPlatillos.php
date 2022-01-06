<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include "partes/head.php"; ?>
      <title>Consultar menu</title>
  </head>
  <body>
    <?php include  "partes/menu.php"?>


    <div class="Estilo_botones">
    <!--<h1> Menu </h1>-->
    <input type="button" name="agregar" value="Agregar Platillo" onclick="window.location.href='/aureasushi/nuevoPlatillo.php'">
    <input type="button" name="habilitar" value="Habilitar" onclick="document.platillos.operacion.value='habilitar'; document.platillos.submit();">
    <input type="button" name="deshabilitar" value="Deshabilitar" onclick="document.platillos.operacion.value='deshabilitar'; document.platillos.submit();">
    <input type="button" name="eliminar" value="Eliminar" onclick="document.platillos.operacion.value='eliminar'; document.platillos.submit();">
    <form name="platillos" class="" action="#" method="get">
    </div>


      <table class="listadoBlanco" border="5">
        <tr>
          <td>Hab/des</td>
          <td>Nombre del platillo</td>
          <td>Costo</td>
          <td>Habilitado</td>
          <td>Descripción de platillo</td>
          <td>Editar platillo </td>
       </tr>


        <input type="hidden" name="operacion" value="">
        <?php

        $listadoPlatillos->data_seek(0);
        while ($fila = $listadoPlatillos->fetch_assoc()) {
          $habilitado = ($fila['deshabilitado']== 1) ? "Si" : "No";
          echo "<tr>";
          echo "<td><input name='".$fila['platillo_id']."' type='checkbox'></td>".
          "<td class='textoRojo'>".$fila['nombre'] ."</td>".
          "<td class='alineacionRojo'>$".$fila['costo'] ."</td>".
          "<td>".$habilitado ."</td>".
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
