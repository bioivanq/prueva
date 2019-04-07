<?php

// if(isset($_POST['email']) && isset($_POST['password']) and isset($_POST['inicio_sesion'])){
session_start();
include 'conexion.php';
	// sleep(2);

	$email=$_POST['email'];
	$password=$_POST['password'];

	// $email='bioivanq@hotmail.com';
	// $password='89091350042aa';

	$registros=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='".$email."' AND password='".$password."' AND validado='1'");

		if(mysqli_num_rows($registros)==0){

			echo "error";


		}
		else {

			$fila=mysqli_fetch_array($registros);
			$permisosenbase = $fila['permisos'];
      $usuariobasedatos = $fila['usuario'];


$nombrebasedatos = $fila['nombre'];
$idenbase = $fila['id'];
$email = $fila['usuario'];



$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['contrasena'] = $fila['contrasena'];
$_SESSION['permisos'] = $fila['permisos'];



if($_SESSION['permisos'] ==1){
  $_SESSION['administrador']=$nombrebasedatos;
}
$_SESSION['id'] = $idenbase;
$_SESSION['login_type'] = "user";
$_SESSION['userid'] = $email;


$_SESSION['usuariotemporal'] = $fila['usuario'];
// tienda
$_SESSION['nombre_cliente'] = $nombrebasedatos;
$_SESSION['id_cliente'] = $idenbase;
			echo $permisosenbase;

		}
		mysqli_close($conexion);
	// }


?>
