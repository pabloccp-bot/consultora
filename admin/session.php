<?php
		//servidor
		//nombre de usuario
		//contraseĂ±a
		//nombre de base de datos
		include "../config/conexion.php";
		$user = $_POST['admin_user'];
		$clave = md5($_POST['admin_clave']);
		
		$sql = "SELECT * FROM admin
			WHERE
				admin_user = '$user'
				AND
				
				admin_clave = '$clave'";
		$lista = $conexion->query($sql);
		if($lista->num_rows == 0){
			header("location: login.php?error=1");
		}else{
			session_start();
			$_SESSION['nombre'] = $user;
			header("location: index.php");
		}
		//echo "<pre>";
		//print_r($lista);
		//echo "</pre>";
?>