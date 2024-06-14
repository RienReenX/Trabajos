<?php

session_start();

if(!isset($_SESSION['username'])){
	header("Location: login.html");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
</head>
<body>
	<h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
	<p>Has ingresado exitosamente.</p>
	<a href="logout.php">Cerrar sesion</a>
</body>
</html>