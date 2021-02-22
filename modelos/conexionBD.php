<?php
function conexionBD(){
  $usuario = "root";
  $psw = "Olguita02";
  $bd = "aureasushi";
  $servidor = "localhost";
  $mysqli = mysqli_connect($servidor, $usuario, $psw, $bd);
  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  } else {
    return $mysqli;
  }
}
 ?>
