<?php
// Verificamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aquí iría el código para procesar los datos (por ejemplo, enviar un correo, almacenar en la base de datos, etc.)
    // Por ahora solo mostramos el mensaje de éxito.
    $mensajeEnviado = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkEzPm6EWgpdhEsPrpkrXjgTmKG5XSRluzpg&s'); /* Fondo de pantalla */
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Barra de navegación */
        header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
            color: white;
            padding: 15px 0;
            text-align: center;
            font-size: 1.8em;
        }

        /* Barra de navegación con enlaces */
        nav {
            text-align: center;
            background-color: #555;
            padding: 10px 0;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            margin: 0 15px;
            background-color: #28a745;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #218838;
        }

        /* Contenedor principal */
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Estilos del formulario */
        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        h2 {
            color: #fff;
            text-align: center;
            font-size: 2.2em;
            margin-bottom: 30px;
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1.1em;
            background-color: #f4f4f4;
            color: #333;
        }

        input[type="submit"] {
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Estilo para el mensaje de éxito */
        .mensaje-exito {
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 1.2em;
        }

        /* Estilo para el enlace de registro */
        .registro {
            text-align: center;
            margin-top: 20px;
        }

        .registro a {
            color: #28a745;
            text-decoration: none;
            font-size: 1.1em;
        }

        .registro a:hover {
            text-decoration: underline;
        }

        /* Estilo para el pie de página */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        /* Animación para el formulario */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            animation: fadeIn 0.8s ease-in-out;
        }

    </style>
</head>
<body>

<header>
    Formulario de Contacto
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="contacto.php">Contacto</a>
</nav>

<div class="container">
    <h2>¡Estamos aquí para ayudarte!</h2>

    <!-- Mensaje de éxito -->
    <?php if (isset($mensajeEnviado) && $mensajeEnviado): ?>
        <div class="mensaje-exito">
            Mensaje Enviado. Gracias por ponerte en contacto con nosotros.
        </div>
        <script>
            // Recarga la página automáticamente después de 3 segundos
            setTimeout(function() {
                location.reload();
            }, 3000);
        </script>
    <?php endif; ?>

    <!-- Formulario de contacto -->
    <form action="contacto.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu Nombre" required>
        <input type="email" name="email" placeholder="Tu Correo Electrónico" required>
        <textarea name="mensaje" placeholder="Tu Mensaje" rows="5" required></textarea>
        <input type="submit" value="Enviar Mensaje">
    </form>

    <div class="registro">
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>
</div>

<footer>
    <p>&copy; 2023 Página Web de Edison Lutuala</p>
</footer>

</body>
</html>
