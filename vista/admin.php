<?php 
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["password"]))
{
	echo "Hola Bienvenido<br>";
	echo "<a href='cerrarsesion.php'>Cerrar Sesión</a>";
}else{
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}




?>