<?php

session_start();


if (isset($_GET['consulta']) and isset($_GET['peliculas']) ) {

include 'conexion.php';
    $word = $_GET['consulta'];
    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuariopeliculas']."' AND contrasena='".
  $_SESSION['contrasenapeliculas']."' AND titulo LIKE '%$word%'  LIMIT 10";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);

}

elseif (isset($_GET['consulta']) and isset($_GET['peliculasyoutube']) ) {

include 'conexion.php';
    $word = $_GET['consulta'];
    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuariopeliculasyoutube']."' AND contrasena='".
  $_SESSION['contrasenapeliculasyoutube']."' AND titulo LIKE '%$word%' LIMIT 10";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);

}
elseif (isset($_GET['consulta']) and isset($_GET['series']) ) {

include 'conexion.php';
    $word = $_GET['consulta'];
    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuarioseries']."' AND contrasena='".
  $_SESSION['contrasenaseries']."' AND tituloserie LIKE '%$word%' group by tituloserie LIMIT 10";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);

}
elseif (isset($_GET['consulta']) and isset($_GET['seriesyoutube']) ) {

include 'conexion.php';
    $word = $_GET['consulta'];
    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuarioseriesyoutube']."' AND contrasena='".
  $_SESSION['contrasenaseriesyoutube']."' AND tituloserie LIKE '%$word%' group by tituloserie LIMIT 10";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);

}elseif (isset($_GET['consulta']) and isset($_GET['tv']) ) {

include 'conexion.php';
    $word = $_GET['consulta'];
    $data = array();
    $sql= "SELECT * FROM television WHERE titulo LIKE '%$word%'  LIMIT 10";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);

}else
{
  echo 'error';
}




?>



