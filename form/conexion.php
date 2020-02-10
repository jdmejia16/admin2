<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conexion DB</title>
<style type="text/css">
	body{
		background-color: black;
	}
	p{
		margin-top: 5%;
		font-size: 1.2em;
		font-family: verdana;
		color: white;
		text-align: center;
		font-weight: bold;
	}
	a{
		font-size: 1.5em;
		font-family: verdana;
		color: red;
		text-align: center;
		text-decoration: none;
		font-weight: bold;
	}
	span{
		color: yellow;
	}
</style>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
</head>
<body>
	<?php

			//Conexion con el servidor
			$enlazar=mysqli_connect("localhost","u554103017_juan","Guatemala1821");

			//Verificacion de la conexion con el servidor
			if($enlazar) {
				echo "<p>No hay conexión con el servidor.</p>";
			}else{

				$servidor=mysqli_select_db($enlazar, 'u554103017_form');
				if($servidor) {
					echo "<p>No se encontro la base de datos.</p>";
				}
			}

			//Parametros Variables
			$nombres_ = $_POST['nombres_'];
			$apellidos_ = $_POST['apellidos_'];
			$dpi_ = $_POST['dpi_'];
			$telefono_ = $_POST['telefono_'];
			$edad_ = $_POST['edad_'];
			$correo_ = $_POST['correo_'];
			$genero_ = $_POST['genero_'];
			$departamento_  = $_POST['departamento_'];
			$estudio_ = $_POST['estudio_'];
			$comentario_ = $_POST['comentario_'];

			//Sentencia SQL
			$sql="INSERT INTO datos VALUES('', '$nombres_', '$apellidos_', '$dpi_', 'telefono_', '$correo_', '$genero_', '$departamento_', '$estudio_', '$comentario_')"; 

			//Ejecucion de la Sentencia
			$sentencia=mysqli_query($enlazar, $sql);

			//Verificacion de la Ejecucion de la Sentencia
			if($sentencia) {
				echo "<p>Hubo un Error en la conexion SQL.</p>";
			}else{
				 echo"<p>Tus datos <span>$nombres_ $apellidos_</span>, se han guardado correctamente.<br><a href='index.html'>Regresar</a></p>";
			}

	?>
</body>
</html>