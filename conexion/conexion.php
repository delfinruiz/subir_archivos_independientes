<?php



	$conn = new mysqli("localhost","root","","prueba_archivo"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

 	mysqli_set_charset($conn,"utf8");


	if(mysqli_connect_errno()){

		echo 'Conexion Fallida : ', mysqli_connect_error();

		exit();

	}



?>
