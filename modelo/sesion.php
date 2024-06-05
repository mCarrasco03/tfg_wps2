<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tfg";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$dni = $_POST['dni'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consultar si el correo ya está registrado
$sql = "SELECT email FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Ya existe un usuario con este correo";
    echo '<button onclick="window.location.href=\'../sesion.php\'">Volver</button>';
    exit();
}

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO usuarios (dni, email, contrasena)
        VALUES ('$dni', '$email', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    echo '<button onclick="window.location.href=\'../cuenta.php\'">Volver</button>';
} else {
    echo "Error en el registro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
