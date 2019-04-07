    <?php
session_start();
include 'conexion.php';



    $data = array();
    $sql= "SELECT * FROM television";

    $ejecutar = $conexion->query($sql);
    while($row = mysqli_fetch_object($ejecutar)){
     $data[]=$row;
    }
   echo json_encode($data);
 mysqli_close($conexion);
 ?>
