<?php
// Verificar si se están recibiendo datos desde un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están establecidos y no son NULL
    $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : NULL;
    $apellido = isset($_POST['txtApellido']) ? $_POST['txtApellido'] : NULL;
    $tabla = isset($_POST['tabla']) ? $_POST['tabla'] : NULL;

    // Mostrar los valores recibidos
    echo "Nombre: " . ($nombre ? $nombre : "No se recibió nombre") . "<br>";
    echo "Apellido: " . ($apellido ? $apellido : "No se recibió apellido") . "<br>";
    echo "Tabla: " . ($tabla ? $tabla : "No se recibió tabla") . "<br>";
}
?>
