<?php
// Configuración de la conexión a la base de datos
$servername = "localhost:3307";
$username = "root";
$password = "admin";
$dbname = "tareas_pwa";

// Recibir datos del formulario de login
$email = $_POST['email'];
$password_input = $_POST['password'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta preparada para obtener datos del usuario por su correo electrónico
$stmt = $conn->prepare("SELECT id, nombre, email, contraseña FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

// Verificar si el usuario existe
if ($stmt->num_rows > 0) {
    // Enlazar las columnas a variables
    $stmt->bind_result($id, $nombre, $email, $clave);

    // Obtener los resultados
    $stmt->fetch();

    // Verificar la contraseña
    if ($password_input == $clave) {
        // Iniciar sesión (puedes implementar tu propio sistema de sesiones)
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['email'] = $email;

        // Redireccionar a una página de bienvenida, por ejemplo
        header("Location: index.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta. <a href='ejercicio6.php'>Volver al inicio de sesión</a>";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado. <a href='ejercicio6.php'>Volver al inicio de sesión</a>";
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$conn->close();
?>
