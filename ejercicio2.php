<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ejercicio 1</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .error {
      color: red;
    }

    input[type="submit"] {
      background-color: #0074D9;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <h1>Formulario de Registro</h1>
  <form id="registration-form">
    <div>
      <label for="name">Nombre:</label>
      <input type="text" id="name" name="name">
      <span class="error" id="name-error"></span>
    </div>
    <div>
      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email">
      <span class="error" id="email-error"></span>
    </div>
    <div>
      <label for="message">Mensaje:</label>
      <textarea id="message" name="message"></textarea>
      <span class="error" id="message-error"></span>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
  <script>
    const form = document.getElementById("registration-form");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const messageInput = document.getElementById("message");
    const nameError = document.getElementById("name-error");
    const emailError = document.getElementById("email-error");
    const messageError = document.getElementById("message-error");

    form.addEventListener("submit", function (event) {
      let isValid = true;

      // Validar el campo de nombre
      if (nameInput.value.trim() === "") {
        nameError.textContent = "El nombre es obligatorio";
        isValid = false;
      } else {
        nameError.textContent = "";
      }

      // Validar el campo de correo electrónico
      if (emailInput.value.trim() === "") {
        emailError.textContent = "El correo electrónico es obligatorio";
        isValid = false;
      } else {
        emailError.textContent = "";
      }

      // Validar el campo de mensaje
      if (messageInput.value.trim() === "") {
        messageError.textContent = "El mensaje es obligatorio";
        isValid = false;
      } else {
        messageError.textContent = "";
      }

      if (!isValid) {
        event.preventDefault(); // Evitar el envío del formulario si no es válido
      }
    });
  </script>
</body>

</html>
