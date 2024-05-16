<?php
if(isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["message"]) ){
    $to = "info@verbat.com.ar";
	$subject = "Mensaje Enviado";
	$contenido .= "Empresa: ".$_POST["empresa"]."\n";
	$contenido .= "Nombre y Apellido: ".$_POST["Name"]."\n\n";
	$contenido .= "Email: ".$_POST["Email"]."\n\n";
	$contenido .= "Comentario: ".$_POST["message"]."\n\n";
	
	$header = "From: info@verbat.com.ar\nReply-To:".$_POST["Email"]."\n";
	$header .= "X-Mailer:PHP/".phpversion()."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/plain";
	if(mail($to, $subject, $contenido ,$header)){
		echo "Mail Enviado.";
		header("Location: http://www.verbat.com.ar");
	}
}
?>
