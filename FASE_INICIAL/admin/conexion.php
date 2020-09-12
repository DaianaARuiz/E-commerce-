<?php
$host="localhost";
$db="comercioit";
$user="root";
$pass="14121998";

try{
	$conexion= new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	// echo "Si conecta";
}catch(PDOException $e){
	echo "ERROR.No conecto".$e-> getMessage();
}

/*
try{
	instrucciones
}catch(){
	mensaje de errores
}finally{ ---opcional----
	instrucciones extras
}

*/