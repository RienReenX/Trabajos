<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "users_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión 
if ($conn->connect_error) {
    die("Conexión fallida: " . htmlspecialchars($conn->connect_error));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = isset($_POST['username']) ? trim($_POST['username']) : '';
    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $speciality = isset($_POST['speciality']) ? trim($_POST['speciality']) : '';
    $curp = isset($_POST['curp']) ? trim($_POST['curp']) : '';
    $school = isset($_POST['school']) ? trim($_POST['school']) : '';
    $pass = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';

    $sql = "INSERT INTO users (username, nombre_aspirante, especialidad, curp, escuela, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssss", $user, $fullname, $speciality, $curp, $school, $pass);

        if ($stmt->execute()) {
            echo "<script>alert('Registro exitoso');</script>";
            header("Location: index.html");
            exit(); // Asegura que el script se detenga después de redirigir
        }else {
            echo "<script>alert('Error: " . htmlspecialchars($stmt->error) . "');</script>";
        }
        $stmt->close(); // Close the statement
    } else {
        echo "<script>alert('Error: " . htmlspecialchars($conn->error) . "');</script>";
    }
}

$conn->close();
?>
