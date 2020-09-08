<?php
$to = $_GET['email'];
$edad = $_GET['edad'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$pais=$_GET['pais'];
$comentario=$_GET['comentario'];
$sexo=$_GET['sexo'];
$terminos=$_GET['terminos'];
$archivo=$_GET['archivo'];

$subject = "Envio de E-mail con PHP";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Esto es un H1</h1>
<p>Esto es el envio en HTML</p>
	<em>Nombre:</em> $nombre <br/><br/>
	<em>Apellido:</em> $apellido <br/><br/>
	<em>Edad:</em> $edad <br/><br/>
	<strong>email:</strong> $email <br/><br/>
	<strong>origen:</strong> $pais <br/><br/>
	<strong>consulta:</strong> $comentario <br/><br/>
	<strong>sexo:</strong> $sexo <br/><br/>
	<strong>terminos:</strong> $terminos <br/><br/>
	</body>
	</html>
	";	
	echo "$message"; 

mail($to, $subject, $message, $headers);
?>