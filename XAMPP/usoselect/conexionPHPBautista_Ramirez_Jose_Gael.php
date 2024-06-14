<?php
include('conexion.php');
session_start();
if(isset($_POST['guardar'])){
	$vusername=$_POST['usuario'];
	$vcorrro  =$_POST['correo'];
	$vpassword=$_POST['clave'];
	$vpassword_hash = password_hash($vpassword, PASSWORD_BCRYPT);
	$query = $coneccion->prepare("SELECT * FROM usuario WHERE correo = vcorreo");
	$query->bindParam("correo",$vcorreo, PDO::PARAM_STR);
	$query->execute();
	if($query->rowCount() > 0){
		echo '<p class "error"> El correo proporcionado ya esta registrado</p>';
	}
	if($query->rowCount() == 0){
		$query = $coneccion->prepare("INSERT INTO usuarios (Nom_usuario,clave,correo) values (:vusername,:vpassword_hash,:vcorreo)");
		$query->bindParam("vusername",$vusername, PDO::PARAM_STR);
		$query->bindParam("vpassword_hash",$vpassword_hash, PDO::PARAM_STR);
		$query->bindParam("vcorreo",$vcorreo, PDO::PARAM_STR);
		$result = $query->execute();

		if($result){
		echo '<p class="success"> El usuario quedo registrado</p>';
		} else {
		echo '<p class="success"> Ocurrio un error inesperado</p>';

		}
	}
}
?>