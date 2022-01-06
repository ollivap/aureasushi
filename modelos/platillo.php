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
  $sql ="SELECT platillo_id, nombre, descripcion, deshabilitadp AS deshabilitado, foto, TRUNCATE (costo, 2)  AS costo FROM platillos;";
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}

function obtenerPlatillo($platillo_id){
  $mysqli = conexionBD();
  $sql ="SELECT * FROM platillos WHERE platillo_id=".$platillo_id;
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}

function habilitar($platillos_ids){
  $mysqli = conexionBD();
  $ids = implode(",",$platillos_ids);
  $sql ="UPDATE platillos SET deshabilitadp = 1 WHERE platillo_id IN (".$ids.")";
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}

function deshabilitar($platillos_ids){
  $mysqli = conexionBD();
  $ids = implode(",",$platillos_ids);
  $sql ="UPDATE platillos SET deshabilitadp = 0 WHERE platillo_id IN (".$ids.")";
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}

function eliminar($platillos_ids){
  $mysqli = conexionBD();
  $ids = implode(",",$platillos_ids);
  $sql ="DELETE FROM platillos WHERE platillo_id IN (".$ids.")";
  $resultado = mysqli_query($mysqli, $sql);
  return $resultado;
}
function repetido($nombre_platillo){
  return $id_platillo;
}

 ?>
