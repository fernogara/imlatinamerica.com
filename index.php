<?php

$errores='';
$enviado='';

if (isset($_POST['submit'])){

	$correo= $_POST['correo'];


	if (!empty($correo)){
		$correo= filter_var($correo, FILTER_SANITIZE_EMAIL);

		IF(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br/>';
		} 
	}else {
			$errores .= 'Por favor ingresa un correo <br/>';
	}

	if(!$errores){
		$enviar_a = 'imarketslivelatinamerica@gmail.com';
		$asunto = 'Correo enviado desde imlatinamerica.com';
		
		$mensaje_preparado .= "Correo: ". $correo."\n";
		

		mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}

require 'index.view.php';

?>