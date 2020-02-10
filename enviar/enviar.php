<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Formulario</title>
</head>
<style type="text/css">
	body{
	width: 100%;
	height: 720px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	background-color: black;
	background: linear-gradient(#fff, #ccdd88, #ddff66);
	background: -webkit-linear-gradient(#fff, #ccdd88, #ddff66);
	background: -moz-linear-gradient(#fff, #ccdd88, #ddff66);
	background: -o-linear-gradient(#fff, #ccdd88, #ddff66);
	}
</style>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
<body>
	<form name="form" method="POST" action="registro.php">
		<h1>Formulario de Contacto</h1>
		<label class="texto">Nombre</label>
		<label><input type="text" name="nombre_" id="nombre_" placeholder="Nombre" required="required"></label>
		<label class="texto">Apellido</label>
		<label><input type="text" name="apellido_" id="apellido_" placeholder="Apellido" required="required"></label>
		<label class="texto" >Telefono</label>
		<label><input type="number" name="telefono_" id="telefono_" placeholder="Telefono" required="required"></label>
		<label class="texto">Correo</label>
		<label><input type="email" name="correo_" id="correo_" placeholder="Correo" required="required"></label>
		<label class="texto">Origen?</label>
		<label><select name="opcion_" id="opcion_">
			<option>Departamento</option>
			<option>Alta Verapaz</option>
			<option>Baja Verapaz</option>
			<option>Chimaltenango</option>
			<option>Chiquimula</option>
			<option>Petén</option>
			<option>El Progreso</option>
			<option>Quiché</option>
			<option>Escuintla</option>
			<option>Guatemala</option>
			<option>Huehuetenango</option>
			<option>Izabal</option>
			<option>Jalapa</option>
			<option>Jutiapa</option>
			<option>Quetzaltenango</option>
			<option>Sacatepéquez</option>
			<option>Sacatepequez</option>
			<option>San Marcos</option>
			<option>Santa Rosa</option>
			<option>Sololá</option>
			<option>Suchitepéquez</option>
			<option>Totonicapán</option>
			<option>Zacapa</option>
		</select></label>
		<label class="texto">Genero?</label>
		<label><select name="genero_" id="genero_">
			<option>Otro</option>
			<option>Masculino</option>
			<option>Femenino</option>
		</select></label>
		<label class="texto">Estudio?</label>
		<label><select name="estudio_" id="estudio_">
			<option>Computacion</option>
			<option>Ingles</option>
		</select></label>
		<label class="texto">Mensaje</label>
		<label><textarea name="mensaje_" id="mensaje_" placeholder="Escribe tu Mensaje" required="required" cols="30" rows="6"></textarea></label>
		<input class="botones" type="submit" name="submit" id="submit" value="Enviar">
		<input class="botones" type="reset" name="borrar_" id="borrar_" value="borrar">
	</form>
</body>
</html>