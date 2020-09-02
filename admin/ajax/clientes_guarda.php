<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$id  = $_POST["cliente_id"];
			$razon  = $_POST["razon_social"];
			$ruc	= $_POST["ruc"];
			$nombre	= $_POST["nombre_propietario"];
			$apellido	= $_POST["apellido_propietario"];
			$email	= $_POST["email_propietario"];
			$telefono	= $_POST["telefono_propietario"];
			$direcc	= $_POST["direccion"];
			$cuota	= $_POST["cuota"];
			$status = isset($_POST["cliente_status"]) ? 1 : 0;

			$sql = "INSERT INTO cliente(
									cliente_id,
									cliente_razon,
									cliente_ruc,
									cliente_nombre,
									cliente_apellido,
									cliente_email,
									cliente_telefono,
									cliente_direccion,
									cliente_cuota,   
									cliente_status
							) VALUES(
									'{$id}',
									'{$razon}',
									'{$ruc}',
									'{$nombre}',
									'{$apellido}',
									'{$email}',
									'{$telefono}',
									'{$direcc}',
									'{$cuota}',
									'{$status}'
							)";
			
			$destino = "clientes_listado.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>