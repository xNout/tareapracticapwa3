<?php
session_start();

// Inicializar el juego si no existe
if (!isset($_SESSION['numero_adivinanza'])) {
    $_SESSION['numero_adivinanza'] = rand(1, 10); // Generar un número aleatorio entre 1 y 10
    $_SESSION['intentos'] = 0;
    $_SESSION['mensaje'] = '';
} else {
    // Procesar el intento del usuario
    if (isset($_POST['intentar'])) {
        $intentar = (int)$_POST['intentar'];
        $_SESSION['intentos']++;

        if ($intentar === $_SESSION['numero_adivinanza']) {
            $_SESSION['mensaje'] = '¡Felicitaciones! ¡Has adivinado el número correctamente!';
        } else {
            $_SESSION['mensaje'] = 'Intenta de nuevo. ¡No es el número correcto!';
        }
    }

    // Si el usuario ha adivinado, mostrar el botón "Volver a jugar"
    if ($_SESSION['mensaje'] === '¡Felicitaciones! ¡Has adivinado el número correctamente!') {
        if (isset($_POST['reiniciar'])) {
            session_unset(); // Reiniciar el juego
            header("Location: ejercicio4.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
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
            font-size: 18px;
            color: #555;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

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
    <h1>Juego de Adivinanzas</h1>
    <p class="animated"><?php echo $_SESSION['mensaje']; ?></p>

    <?php if ($_SESSION['mensaje'] === '¡Felicitaciones! ¡Has adivinado el número correctamente!') : ?>
        <form method="post" action="">
            <button type="submit" name="reiniciar">Volver a jugar</button>
        </form>
    <?php else : ?>
        <p>Intento: <?php echo $_SESSION['intentos']; ?></p>
        <form method="post" action="">
            <label for="intentar">Adivina el número (entre 1 y 10): </label>
            <input type="number" name="intentar" id="intentar" required min="1" max="10">
            <button type="submit">Intentar</button>
        </form>
    <?php endif; ?>
</body>
</html>
