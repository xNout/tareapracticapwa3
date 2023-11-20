<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ejercicio 1</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      text-align: center;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      display: inline;
      margin: 5px;
    }

    a {
      text-decoration: none;
      color: #333;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    ul.submenu {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 10px;
    }

    ul.submenu li {
      display: block;
    }
  </style>
</head>

<body>
  <h1>Menú de Navegación Desplegable</h1>
  <ul>
    <li class="menu-item">
      <a href="#">Inicio</a>
    </li>
    <li class="menu-item">
      <a href="#">Productos</a>
      <ul class="submenu">
        <li><a href="#">Producto 1</a></li>
        <li><a href="#">Producto 2</a></li>
        <li><a href="#">Producto 3</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="#">Servicios</a>
      <ul class="submenu">
        <li><a href="#">Servicio 1</a></li>
        <li><a href="#">Servicio 2</a></li>
        <li><a href="#">Servicio 3</a></li>
      </ul>
    </li>
  </ul>
  <script>
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach((menuItem) => {
      menuItem.addEventListener('click', () => {
        const submenu = menuItem.querySelector('.submenu');
        if (submenu) {
          submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
      });
    });
  </script>
</body>

</html>
