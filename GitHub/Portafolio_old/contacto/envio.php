<?php

// receptores del email
$receptores = 'sergiomoya1980@gmail.com';

// Recogemos información del correo
$nombre = $_POST["nombre"]; 
$email = $_POST["email"]; 
$mensaje = $_POST["motivo"] . " Nombre: " . $nombre . " Email: " . $email; 

require_once "class.phpmailer.php";

$correo = new PHPMailer();
$correo->IsHTML(true);              
$correo->From     = $nombre; 
$correo->FromName = $nombre;
$correo->Subject  = 'Nuevo contacto en smoya.xyz';
$correo->AddAddress($receptores);
$correo->Body = $mensaje; 

if ($_POST['spam'] != "") {
//Es SPAM, salimos sin enviar el formulario de contacto
exit();
}else{
//Es un cliente real, aquí incluimos el código de nuestro formulario
	if($correo->send()){		
		header("Location: http://smoya.xyz/Portafolio/templates/portafolio.php?envio=exito#contacto"); 		
	}	
	else{
		header("Location: http://smoya.xyz/Portafolio/templates/portafolio.php?envio=fallo#contacto");
	}
}

?>
