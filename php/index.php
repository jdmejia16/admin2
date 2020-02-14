<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enviar</title>
	<style>
	body{
		background-color:#000;
	}
	p {
	font-family: verdana;
	font-size: 0.95em;
	font-weight: bold;
	color:#fff;
	text-decoration: none;
	text-align:center;
	margin-top: 5%;
	margin-left: auto;
	margin-right: auto;
	}
	img{
		width: 97%;
		height: 100%;
		margin-left: auto;
		margin-right: auto;
		text-align:center;
	}
	strong{
		color:gray;
		font-size: 1.1em;
		font-family: arial black;
		font-weight: bold;
	}
	</style>
  <style>
    img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
        }
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;
        }
    </style>
</head>
<body>
	<?php
		requiere 'PHPMailer.php';
		requiere 'SMTP.php';
		requiere 'Exception.php';
		requiere 'OAuth.php';
	
		$mail = new PHPMailer\PHPMailer\PHPMailer();
	
	
	?>
</body>
</html>
