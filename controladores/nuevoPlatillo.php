<?php
  if($_POST["nombre"]){
    include "../modelos/platillo.php";
    $platillo=["nombre"=>$_POST["nombre"],
    "descripcion"=>$_POST["descripcion"],
    "foto"=>$_FILES['foto']['name'],
    "costo"=>$_POST["costo"],
    "curp_admon_alta"=>$_POST["curp_admon_alta"]];


    $directorio = '../public/img/';
    $subir_archivo = $directorio.basename($_FILES['foto']['name']);
    //echo $_FILES['foto']['tmp_name'];
    //var_dump($_FILES); var_dump($HTTP_POST_FILES);
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $subir_archivo)) {
      $resultado = agregarPlatillo($platillo);
      if($resultado){
        include "../vistas/resultPlatilloOK.php";
        //echo "<h1> El platillo fue dado de alta</h1>";
        //echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
      }
        else {
        include "../vistas/resultPlatilloError.php";
        //echo "<h1> Verifica los datos, no se pudo dar de alta al platillo</h1>";
      }
    } else {
      include "../vistas/resultPlatilloError.php";
       
    }

  } else {
    include "../vistas/frmNuevoPlatillo.php";
  }
  --Otra para probar cambios

 ?>
