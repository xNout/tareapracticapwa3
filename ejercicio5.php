<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .modal.show {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            max-width: 80%;
            max-height: 80%;
            margin: auto;
        }

        .modal img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Galería de Imágenes</h1>

    <div class="gallery">
        <?php
        // Ruta al directorio de imágenes
        $imageDirectory = 'images/';

        // Obtener todas las imágenes en el directorio
        $images = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Mostrar cada imagen en la galería
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Imagen" onclick="openModal(\'' . $image . '\')">';
        }
        ?>
    </div>

    <!-- Modal de previsualización -->
    <div id="myModal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <img id="previewImage">
        </div>
    </div>

    <script>
        // Funciones JavaScript
        function openModal(imageSrc) {
            document.getElementById('previewImage').src = imageSrc;
            document.getElementById('myModal').classList.add('show');
        }

        function closeModal() {
            document.getElementById('myModal').classList.remove('show');
        }
    </script>

</body>
</html>
