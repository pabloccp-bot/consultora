<?php 
	
	$conexion = mysqli_connect('localhost:3307','root','','consultora');

	if(!$conexion){
		echo "Ocurrio un error";
		exit;
	}

?>