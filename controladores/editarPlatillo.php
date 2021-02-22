<?php
  include_once "modelos/platillo.php";
  $platillo = obtenerPlatillo($_GET['platillo_id']);
  include "vistas/frmEditarPlatillo.php";
  echo "Hola vamos a editar el platillo".$_GET['platillo_id'];
 ?>
