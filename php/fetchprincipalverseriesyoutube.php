<?php

session_start();
include 'conexion.php';

if(isset($_POST["limit"], $_POST["start"]))
{

$start=$_POST['start'];
$limit=$_POST['limit'];


$consulta =  "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuarioseriesyoutube']."' AND contrasena='".
  $_SESSION['contrasenaseriesyoutube']."' group by tituloserie ORDER BY valoracion ASC LIMIT $start,$limit";



$resultados=mysqli_query($conexion,$consulta);

while($fila = mysqli_fetch_array($resultados))
{


include'seriesvideoyoutube.php';
}



}
?>
