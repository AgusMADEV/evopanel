<?php

	$servidor = "";				// Defino el servidor
	$usuario = "";			// Defino el usuario con permiso
	$contrasena = "";		// Defino la contraseña de ese usuario
	$base = "";				// Defino la base de datos

	$conexion = new mysqli(
		$servidor, 
		$usuario, 
		$contrasena, 
		$base
	);												// Creo una conexión de tipo MySQL

?>