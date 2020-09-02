<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['cliente_id'];
			$razon  = $_POST["razon_social"];
			$ruc	= $_POST["ruc"];
			$nombre	= $_POST["nombre_propietario"];
			$apellido	= $_POST["apellido_propietario"];
			$email	= $_POST["email_propietario"];
			$telefono	= $_POST["telefono_propietario"];
			$direcc	= $_POST["direccion"];
			$cuota	= $_POST["cuota"];
			$sql = "SELECT * FROM cliente WHERE cliente_id = $id";
			$resultado = $conexion->query($sql);
			$dato_actual = mysqli_fetch_assoc($resultado);
			
		
			
			if($_POST['cliente_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE cliente
			SET
				cliente_id= '$id',
				cliente_razon= '$razon',
				cliente_ruc= '$ruc',
				cliente_nombre= '$nombre',
				cliente_apellido= '$apellido',
				cliente_email= '$email',
				cliente_telefono= '$telefono',
				cliente_direccion= '$direcc',
				cliente_cuota= '$cuota',
				cliente_status= '$estado'
			WHERE
				cliente_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../clientes_listado.php");
			
		
		
?>