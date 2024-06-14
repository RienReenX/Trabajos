<?php
// Se recibe informacion del formulario
if ($_POST) {
	if(isset($_POST['usuario']))
	{
    $nombre = $_POST["usuario"];
    if(empty($nombre)){echo "<p>Por favor,ingrese su nombre.</p>";}
    else{echo "<p>El nombre de usuario es: $nombre</p>";}
}
}
?>
<!-- Bautista Ramirez José Gael -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CBTis 103–ejercicio01 PHP.</title>
</head>
<body>
<form action="ejer01.php" method="POST">
    <label for="usuario"></label>
    <input type="text" id="usuario" name="usuario">
    <input type="submit" value="Enviar">
</form>


</body>
</html>