<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "users_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión 
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Usar una declaración preparada para evitar inyección SQL
    $stmt = $conn->prepare("SELECT * FROM users WHERE username= ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Obtener la fila de resultados
        if (password_verify($pass, $row['password'])) {
            $_SESSION['message'] = "Inicio de sesión exitoso";
            header("Location: index.html");
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

$conn->close();
?>
