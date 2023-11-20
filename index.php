<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Estilos generales */
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f2f2f2;
      }

      .container {
          text-align: center;
          max-width: 800px; /* Aumentamos el ancho para que quepan más botones */
          margin: 0 auto;
          padding: 20px;
          background-color: #fff;
          border: 1px solid #ddd;
          border-radius: 5px;
      }

      h1 {
          color: #007BFF;
      }

      p {
          font-size: 18px;
          margin-bottom: 20px;
      }

      /* Estilos para los botones */
      .button-container {
          display: flex;
          flex-wrap: wrap; /* Permite que los botones se envuelvan cuando no quepan en la pantalla */
          justify-content: center;
      }

      .button {
          display: inline-block;
          padding: 10px 20px;
          background-color: #007BFF;
          color: #fff;
          text-decoration: none;
          border-radius: 5px;
          margin: 10px;
          font-weight: bold;
      }

      .button:hover {
          background-color: #0056b3;
      }

    </style>
    <title>Página de Ejercicios</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Página de Ejercicios</h1>
        <p>Elige una opción:</p>
        <div class="button-container">
            <a href="Ejercicio1.php" class="button">Ejercicio 1</a>
            <a href="Ejercicio2.php" class="button">Ejercicio 2</a>
            <a href="Ejercicio3.php" class="button">Ejercicio 3</a>
            <a href="Ejercicio4.php" class="button">Ejercicio 4</a>
            <a href="Ejercicio5.php" class="button">Ejercicio 5</a>
            <a href="Ejercicio6.php" class="button">Ejercicio 6</a>
        </div>
    </div>
</body>
</html>
