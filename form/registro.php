<!Doctype html>
<html lang="es">
<header>
    <title>Enviar</title>
    <meta charsert="UTF-8">
</header>
<style>
    p{
        font-family:verdana;
        font-size:1em;
        color:black;
        text-shadow:0.05em 0.01em white;
        text-align:center;
        margin-top:5%;
    }
     a{
        font-family:verdana;
        font-size:1em;
        color:red;
        text-shadow:0.05em 0.01em white;
        text-align:center;
        margin-top:5%;
        text-decoration: none;
    }
</style>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
<body>
<?php
	//Conectar con el Servidor
    $conectar=mysqli_connect("localhost","root","");

    //Verificacion de la Conexion con el Servidor
    if(!$conectar){
        echo"<p>No se pudo conectar con el servidor</p>";
    }else{
       
        $base=mysqli_select_db($conectar, "responsive");
        if(!$base){
            echo "<p>No se encontro la base de datos.</p>";
        }
    }
	
            //Parametros de Entrada
            $nombres_ = $_POST['nombres_'];
            $apellidos_ = $_POST['apellidos_'];
            $dpi_ = $_POST['dpi_'];
            $telefono_ = $_POST['telefono_'];
            $edad_ = $_POST['edad_'];
            $correo_ = $_POST['correo_'];
            $genero_ = $_POST['genero_'];
            $lugar_ = $_POST['lugar_'];
            $estudio_ = $_POST['estudio_'];
            $comentario_ = $_POST['comentario_'];
	
    //Sentencia SQL
    $sql = "INSERT INTO registro VALUES (' ', '$nombres_', '$apellidos_', '$dpi_', 'telefono_', '$correo_', '$genero_', '$lugar_', '$estudio_', '$comentario_')";
	
    //Ejecucion de la Sentencia SQL
    $ejecutar=mysqli_query($conectar, $sql);
    
    //Verificacion de la Ejecucion de la Sentencia
    if(!$ejecutar){
        echo"<p>Hubo algún error</p>";
    }else{
        echo"<p>Tus datos <span>$nombre_ $apellido_</span>, se han guardado correctamente.<br><a href='index.html'>volver</a></p>";
    }
?>
</body>
</html>