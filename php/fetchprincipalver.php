<?php

session_start();
include 'conexion.php';

if(isset($_POST["limit"], $_POST["start"]))
{

$start=$_POST['start'];
$limit=$_POST['limit'];


$consulta =  "SELECT * FROM peliculas WHERE usuario='".$_SESSION['usuariopeliculas']."' AND contrasena='".
  $_SESSION['contrasenapeliculas']."' ORDER BY valoracion ASC LIMIT $start,$limit";



$resultados=mysqli_query($conexion,$consulta);

while($fila = mysqli_fetch_array($resultados))
{


include'peliculasvideo.php';
}



}
?>
