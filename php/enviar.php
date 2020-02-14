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
	/<?php
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$mensaje=$_POST['mensaje'];

		$mailsend=mail('juandiegomejiac@gmail.com', 'Nuevo Mensaje', "Nombre: $nombre\r\nCorreo: $correo\r\nMensaje: $mensaje\r\n");

		if ($mailsend){
			echo ("<p>Bienvenid@ a mi página web <strong>$nombre.</strong> Tu mensaje a sido enviado, me comunicare con usted lo antes posible.</p> 
				</p><img src='gracias.gif' alt='gracias por visitar mi página web' width='100%' height='100%'></p>
				<p><strong>Por Visitar mi Web.</strong></p>");
		}
		 	else{
		 		echo ("<p>Lo lamento su correo no fue enviado, vuelve a intentarlo.</p>");
		 	}
	?>/
	
	  ?php

        $resul="";
        if(isset($_POST['submit'])){
          require 'phpmailer/PHPMailerAutoload.php';
          $mail = new PHPMailer;
          $mailer->isSMTP();
          $mail->HOst='smtp.gmail.com';
          $mail->Port=587;
          $mailSMTPAuth=true;
          $mail->SMTPSecure='tls';
          $mail->Usernmae='jdmejia016@gmail.com';
          $mail->Password='rojocampeon1936';

          $mail->setFrom($_POST['email'],$_POST['nombre']);
          $mail->addAddress('jdmejia016@gmail.com');
          $mail->addReplyTo($_POST['email'],$_POST['nombre']);

          $mail->isHTML(true);
          $mail->Subject='Enviado por '.$_POST['nombre'];
          $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['mensaje'].'</h1>';

          if(!$mail->send()){
          $result="Mensaje no Enviado, inténtelo de nuevo por favor";
          }

          else
          {
            $result="Gracias ".$_POST['NOMBRE']." por escribir, me pondre en contacto lo mas pronto posible!";
          }

      }
    ?
</body>
</html>
