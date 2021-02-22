<?php
include_once "conexionBD.php";

function agregarPlatillo($platillo){
    $mysqli = conexionBD();
    $sql = "INSERT INTO platillos (nombre,descripcion,foto,costo,curp_admon_alta)
            VALUES('". $platillo['nombre'] ."','". $platillo['descripcion'] ."'
    ,'" . $platillo['foto'] ."'," . $platillo['costo'] ."
    ,'". $platillo['curp_admon_alta'] . "')";
    //echo $sql;
    $resultado = mysqli_query($mysqli, $sql);
    return $resultado;
}

function obtenerPlatillos(){
  $mysqli = conexionBD();
  $sql ="SELECT * FROM platillos";
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}

function obtenerPlatillo($platillo_id){
  $mysqli = conexionBD();
  $sql ="SELECT * FROM platillos WHERE platillo_id=".$platillo_id;
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}
 ?>
