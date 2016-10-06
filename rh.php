<?php

	if(isset($_GET['nombre'],$_GET['apellido'],$_GET['cedula'],$_GET['telefono'],$_GET['username'],$_GET['password'],$_GET['password2'],$_GET['email'],$_GET['born'])){
		if($_GET['password'] == $_GET['password2']){
			$nombre = $_GET['nombre'];
			$apellido = $_GET['apellido'];
			$cedula = $_GET['cedula'];
			$telefono = $_GET['telefono'];
			$username = $_GET['username'];
			$password = $_GET['password'];
			$password2 = $_GET['password2'];
			$email = $_GET['email'];
			$born = $_GET['born'];
			echo $nombre;
		}	else{
			die("La contraseña no coincide");	
		}
	}	else{
		die("Ingrese toda la información necesaria");
	}	

		$conn = mysqli_connect("localhost", "root", "DsI6BMQeVzalCuEr", "livrenet");
		if(!$conn){
			die("Error al insertar. ERROR ".mysqli_error($conn));
		}



		else{

			$tildes = $conn->query("SET NAMES 'utf8'"); 

			$result = mysqli_query($conn, "INSERT INTO usuario VALUES (null, '$nombre', '$apellido', '$username', '$password', '$cedula', 'no se' ,'$born','$telefono',null)");

			if($result)
				echo ', Los datos han sido insertados en la base de datos';
			else
				echo 'Error: '.mysqli_error($conn);

			mysqli_close($conn); 
		}
	?>