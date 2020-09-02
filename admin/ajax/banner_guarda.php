<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$banner  = $_POST["banner_id"];
			$descripcion	= $_POST["descripcion"];
			$status = isset($_POST["status"]) ? 1 : 0;

			$n = $_FILES["imagen"]["name"];
			$extension = substr($n, -3, strlen($n));
			$nombre = time().".".$extension;
			move_uploaded_file($_FILES["imagen"]["tmp_name"], "../../upload/banner/".$nombre);

			$sql = "INSERT INTO banner(
									banner_id,
									banner_descripcion,
									banner_imagen,   
									banner_status
							) VALUES(
									'{$banner}',
									'{$descripcion}',
									'{$nombre}',
									'{$status}'
							)";
			
			$destino = "banner_listado.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>