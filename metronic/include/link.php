<?php
$servername = "sql10.freesqldatabase.com";
$database = "sql10794268";
$username = "sql10794268";
$password = "vIU5lTICxN";


$inicio = "USER/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button";

function conectar (){
	$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"]);	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function sentencia($conn, $sql){
	$rst = mysqli_query($conn, $sql);
	return $rst;
}

function contarfilas ($rst){
	$nRows = mysqli_num_rows($rst);
	return $nRows;
}

function traerdatos($rst){
	$filas = mysqli_fetch_assoc($rst);	
	return $filas;
}

function desconectar ($conn){
	mysqli_close($conn);
}


?>
