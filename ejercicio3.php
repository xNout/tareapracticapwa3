<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1; 
} else {
    $_SESSION['visitas']++;
}

$numeroVisitas = $_SESSION['visitas'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 100px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 20px;
            color: #555;
        }

        /* Animación del número de visitas */
        .animated {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <h1>Bienvenido a mi sitio web</h1>
    <p class="animated">¡Has visitado esta página <?php echo $numeroVisitas; ?> veces!</p>
</body>
</html>
