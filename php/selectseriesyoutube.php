    <?php
session_start();
include 'conexion.php';


    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuarioseriesyoutube']."' AND contrasena='".
  $_SESSION['contrasenaseriesyoutube']."' group by tituloserie";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);
 mysqli_close($conexion);
 ?>
