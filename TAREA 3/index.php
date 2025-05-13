<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA WEB DE EDISON LUTUALA</title>
    <style>
        /* Fondo de página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://www.shutterstock.com/image-illustration/david-street-style-graphic-designtextile-600nw-2265632523.jpg'); /* Puedes cambiar esta URL por cualquier imagen de internet */
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Encabezado */
        header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        h1 {
            font-size: 3em;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .ejercicio-lista {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .ejercicio-lista li {
            background-color: #28a745;
            color: white;
            margin: 10px;
            padding: 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            width: 250px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .ejercicio-lista li:hover {
            background-color: #218838;
            transform: translateY(-5px); /* Efecto de levantado */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .ejercicio-lista li a {
            text-decoration: none;
            color: white;
            display: block;
        }

        .description {
            font-size: 18px;
            margin-top: 10px;
            text-align: center;
            color: #333;
            font-weight: 300;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro semi-transparente */
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 1.2em;
        }

    </style>
</head>
<body>

<header>
    <h1>PÁGINA WEB DE EDISON LUTUALA</h1>
</header>

<div class="container">
    <h2>Lista de Ejercicios</h2>
    <p class="description">Bienvenido a mi página web. Aquí encontrarás diversos ejercicios de desarrollo web realizados con HTML, CSS, JavaScript y PHP. Haz clic en el nombre de cada ejercicio para comenzar.</p>

    <ul class="ejercicio-lista">
        <li><a href="menu.php">Ejercicio 1: Menú Desplegable</a></li>
        <li><a href="contacto.php">Ejercicio 2: Formulario de Contacto</a></li>
        <li><a href="contador.php">Ejercicio 3: Contador de Visitas</a></li>
        <li><a href="adivinanza.php">Ejercicio 4: Juego de Adivinanza</a></li>
        <li><a href="galeria.php">Ejercicio 5: Galería de Imágenes</a></li>
        <li><a href="login.php">Ejercicio 6: Sistema de Login</a></li>
    </ul>
</div>

<footer>
    <p>&copy; 2023 Página Web de Edison Lutuala</p>
</footer>

</body>
</html>
