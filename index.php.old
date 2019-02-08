<?php

$errores='';
$enviado='';
$erroresSesion='';
$usuarioRemoto='';

if (isset($_POST['submit'])){
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	$mensaje= $_POST['mensaje'];


	if (!empty($nombre)){
		$nombre= trim($nombre);
		$nombre= filter_var($nombre,FILTER_SANITIZE_STRING);
	} else{
	$errores .='Por favor ingrese un nombre <br />';
	}

	if (!empty($correo)){
		$correo= filter_var($correo, FILTER_SANITIZE_EMAIL);

		IF(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br/>';
		} 
	}else {
			$errores .= 'Por favor ingresa un correo <br/>';
	}

	if (!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Por favor ingrese el mensaje <br />';
	}

	if(!$errores){
		$enviar_a = 'fer.nogara@gmail.com';
		$asunto = 'Correo enviado desde imlatinamerica.com';
		$mensaje_preparado = "De: ".$nombre."\n";
		$mensaje_preparado .= "Correo: ". $correo."\n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}

if (isset($_POST['ingresar'])){
	$usuario= $_POST['usuario'];
	$passwordSesion= $_POST['passwordSesion'];

	if (!empty($usuario)){
		$usuario= trim($usuario);
		$usuario= filter_var($usuario,FILTER_SANITIZE_STRING);
		if (!($usuario == 'REMOTO')){
			$erroresSesion .= 'El usuario no es valido <br />';
		}
	} else{
	$erroresSesion .= 'Por favor ingrese un nombre de usuario <br />';
	}

	if (!empty($passwordSesion)){		
		$passwordSesion= trim($passwordSesion);
		$passwordSesion= filter_var($passwordSesion,FILTER_SANITIZE_STRING);
		if (!($passwordSesion == 'REMOTO*')){
			$erroresSesion .= 'La contraseña no es valida <br />';
		}
	} else{
	$erroresSesion .= 'Por favor ingrese una contraseña <br />';
	}

	if(!$erroresSesion){
		$usuarioRemoto = 'true';
	}

}

require 'index.view.php';

?>