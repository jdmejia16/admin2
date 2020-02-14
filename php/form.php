<!DOCTYPE html> 
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	 <!-- fuente -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/apple-touch-icon-57.png">
        <style type="text/css">
body{
         margin-left:auto;
         margin-right:auto;     
}
table{
         text-align:center;
         font-family: arial black;
         font-size:0.9em;
         color:#fff;
         width: 100%;
}
.datos{
           width:95.5%;
           background-color:#2E2E2E;
           font-family: arial black;
           font-size:1em;
           color:#fff;
           border: 1px solid black;
}
.datos_{
           background-color:#2E2E2E;
          font-family: arial black;
           font-size:1em;
           color:#fff;
           cursor: pointer;
           border: 1px solid black;
           border-radius: 0.25em;
}
.datos_:hover{
          color:#fff;
          background-color:black;
          border: 1px solid black;
          border-radius: 0.25em;
}
textarea{
           width:95.5%;
           background-color:#2E2E2E;
          font-family: arial black;
           font-size:1em;
           color:#fff;
           border: 1px solid black;
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
                          
                          
                         
							 <form id="ContactForm" name="form" action="" method="POST">
                                    <table border="0" width="30%" cellpadding="2" cellspacing="2" align="center">
                                          <tr>
	                                           <td></td>
	                                           <td><input class="datos" type="text"  name="nombre" placeholder="Nombre y Apellido" required/><td>
                                          <tr>
                                 		  <tr>
	                                 		  	<td></td>
	                                            <td><input class="datos" type="email" name="email" placeholder="Correo Electonico" required/><td>
                                     	  <tr>
                                  		  <tr>
	                                  		    <td></td>
	                                            <td><textarea name="mensaje" cols="30" rows="10" placeholder="Escribe tu Mensaje"></textarea></td>
                                         </tr>
                                         <tr> 
                                           <td colspan="2">
	                                            <input  class="datos_" type="reset" name="borrar" value="Borrar">
	                                            <input  class="datos_" type="submit" name="enviar" value="Enviar">
                                              <p><?= $result; ?></p>
                                           </td>
                                         </tr>
                                    </table>
                            </form>
                             
         </body>
         <footer>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
         </footer>
</html>