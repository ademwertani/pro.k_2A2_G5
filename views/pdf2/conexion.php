<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'pro.k');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>