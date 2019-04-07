    <?php
    session_start();
include 'conexion.php';
if(isset($_GET['tituloserie'])){
$tituloserie=$_GET['tituloserie'];


    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuarioseriesyoutube']."' AND contrasena='".
  $_SESSION['contrasenaseriesyoutube']."' AND tituloserie= '$tituloserie' ORDER BY titulo";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);
 }
 else{
  echo 'error';
 }
 mysqli_close($conexion);
 ?>
