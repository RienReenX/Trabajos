<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_calculos.css">
    <title>Practica 1a - Cálculos</title>
</head>
<!-- Bautista Ramirez José Gael -->
<body>
    <section>
        <form method="post" action="prac_1b_del_ejer02.php">
            <label for="numero1">Número 1:</label>
            <input type="text" name="numero1" id="numero1" 
            value="<?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>">
            <label for="numero2">Número 2:</label>
            <input type="text" name="numero2" id="numero2"
             value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>">
            <button type="submit" name="calcular">Calcular</button>
        </form>
        
        <div class="resultado">
            <?php
                session_start();
                $error = '';
                $resultado = '';
                $tabla_multiplicar = '';
                $alignment = 'left'; 
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : '';
                    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';
                    if (isset($_POST['alignment'])) {
                        $alignment = $_POST['alignment'];
                    }

                    if (!is_numeric($numero1) || !is_numeric($numero2)) {
                        $error = 'Por favor, introduce dos números válidos.';
                    } else {
                        $suma = $numero1 + $numero2;
                        $resta = $numero1 - $numero2;
                        $multiplicacion = $numero1 * $numero2;
                        $division = ($numero2 != 0) ? $numero1 / $numero2 : 'No se puede dividir por cero';
                        
                        $resultado = "<p>Suma: $suma</p>";
                        $resultado .= "<p>Resta: $resta</p>";
                        $resultado .= "<p>Multiplicación: $multiplicacion</p>";
                        $resultado .= "<p>División: $division</p>";
                        
                        $tabla_multiplicar = "";
                        for ($i = 1; $i <= 10; $i++) {
                            $res = $numero1 * $i;
                            $tabla_multiplicar .= "$numero1 x $i = $res<br>";
                        }

                        $_SESSION['tabla_multiplicar'] = $tabla_multiplicar;
                    }
                }

                if (isset($_SESSION['tabla_multiplicar'])) {
                    $tabla_multiplicar = $_SESSION['tabla_multiplicar'];
                }

                if ($error) {
                    echo "<p class='error'>$error</p>";
                } else {
                    echo $resultado;
                    echo "<div id='tabla-multi'>$tabla_multiplicar</div>";
                }
            ?>
        </div>
        
        <div class="cuadrado">
            <div class="texto <?php echo 'align-' . $alignment; ?>">
                Esta es la tabla de multiplicar:
                <div id="tabla-multi"><?php echo $tabla_multiplicar; ?></div>
            </div>
        </div>
        <form method="post" action="prac_1b_del_ejer02.php">
            <input type="hidden" name="numero1" value="<?php echo isset($numero1) ? $numero1 : ''; ?>">
            <input type="hidden" name="numero2" value="<?php echo isset($numero2) ? $numero2 : ''; ?>">
            <button type="submit" name="alignment" value="left">Left</button>
            <button type="submit" name="alignment" value="right">Right</button>
            <button type="submit" name="alignment" value="end">End</button>
            <button type="submit" name="alignment" value="justify">Justify</button>
        </form>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const numero = document.getElementById("numero1");
                const tablaMulti = document.getElementById("tabla-multi");

                function generarTabla() {
                    const num = parseInt(numero.value);
                    let tablaHTML = "";
                    for (let i = 1; i <= 10; i++) {
                        const resultado = num * i;
                        tablaHTML += ${num} x ${i} = ${resultado}<br>;
                    }
                    tablaMulti.innerHTML = tablaHTML;
                }
                
                document.querySelector("button[name='calcular']").addEventListener("click", function (event) {
                    event.preventDefault();
                    generarTabla();
                });
            });
        </script>
    </section>
</body>
</html>