    <?php
if(isset($_GET['ordenar']) and isset($_GET['ordenarpor']) ){
  session_start();
include 'conexion.php';


    $ordenar = $_GET['ordenar'];
    $data = array();
    $sql= "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuariopeliculasyoutube']."' AND contrasena='".
  $_SESSION['contrasenapeliculasyoutube']."' AND categoria='".
  $ordenar."'";

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
