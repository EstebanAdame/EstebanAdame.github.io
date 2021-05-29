<?php
	$nombre = $_GET["nombre"];
	$email = $_GET["email"];
	$asunto = $_GET["asunto"];
	$mensaje = $_GET["mensaje"];

	echo "Datos capturados";
	echo "Nombre: " + $nombre + "<br/>";
	echo "Correo: " + $email + "<br/>";
	echo "Asunto: " + $asunto + "<br/>";
	echo "Mensaje: " + $mensaje + "<br/>";					
?>	