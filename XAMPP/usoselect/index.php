
<?php
$conexion = new PDO('mysql:host=localhost;dbname=pibd', 'root', '');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>practica</title>
</head>
<body>
	<div>
		<h1>Listado de tutores para titulacion</h1>
		<?php
		$tutores = $conexion->prepare('SELECT * FROM tutores');
		$tutores->execute();
		$resultados = $tutores->fetchAll(PDO::FETCH_ASSOC);
		if ($tutores->rowCount() > 0) {
			echo "<table border=1>";
		
			// Table data
			foreach ($resultados as $result) {
				echo "<tr>";
				echo "<td>".$result['IdTutor']."</td>";
				echo "<td>".$result['Nombre']."</td>";		
				echo "<td>".$result['RFC']."</td>";		
				echo "<td>".$result['Correo']."</td>";		
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No hay tutores disponibles.";
		}
		?>
	</div>
</body>
</html>