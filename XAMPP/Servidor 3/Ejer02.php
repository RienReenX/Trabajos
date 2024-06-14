<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBTis 103 – Operadores aritméticos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <aside>
        <form method="POST">
            <label for="valor1">Valor 1:</label>
            <input type="text" id="valor1" name="valor1" required>
            <br><br>
            <label for="valor2">Valor 2:</label>
            <input type="text" id="valor2" name="valor2" required>
            <br><br>
            <button type="submit">Calcular</button>
        </form>
    </aside>
    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor1']) && isset($_POST['valor2'])) {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            if (!empty($valor1) && !empty($valor2) && is_numeric($valor1) && is_numeric($valor2)) {
                $suma = $valor1 + $valor2;
                $valor_mas_alto = max($valor1, $valor2);
                $valor_mas_bajo = min($valor1, $valor2);

                echo "<h2>Resultados:</h2>";
                echo "La suma de los valores recibidos es: $suma<br>";
                echo "El valor más alto es: $valor_mas_alto<br>";
                echo "El valor más bajo es: $valor_mas_bajo<br>";
            } else {
                echo "<p>Por favor, ingrese valores numéricos válidos.</p>";
            }
        } else {
            echo "<p>Por favor, complete el formulario.</p>";
        }
        ?>
    </section>
</body>
</html>
