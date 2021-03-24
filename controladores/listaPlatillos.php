<?php
  include "modelos/platillo.php";
  //Si existe la variable significa que presionaron cualquiera de los 3 botones
  //Habilitar Deshabilitar o Eliminar
  if(isset($_GET['operacion'])){
    $platillos_ids=[];
    // Recorremos todo el arreglo global $_GET para obtener los id que deben ser modificados
    foreach ($_GET as $clave => $valor) {
      //Filtramos solo los que son numericos
      if(preg_match("/\d+/",$clave)){
        $platillos_ids[]=$clave;
      }
    }

    if($_GET['operacion']=="habilitar"){
      echo "Se habilitaran: ".implode(',', $platillos_ids);
      habilitar($platillos_ids);
    } elseif ($_GET['operacion']=="deshabilitar") {
      deshabilitar($platillos_ids);
    } elseif ($_GET['operacion']=="eliminar") {
      eliminar($platillos_ids);
    }

  }

  $listadoPlatillos = obtenerPlatillos();
  include "vistas/listaPlatillos.php";


 ?>
