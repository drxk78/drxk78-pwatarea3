<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1: Menú Desplegable Mejorado</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://static.vecteezy.com/system/resources/thumbnails/022/060/169/small/programming-code-abstract-technology-background-of-software-developer-and-computer-script-generative-ai-photo.jpg'); /* Aquí pon la URL de la imagen */
            background-size: cover;
            background-position: center;
            color: white;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 2.5em;
        }

        /* Estilo del menú */
        .menu {
            width: 250px;
            margin: 20px auto;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .menu > li {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            font-size: 1.2em;
            border-radius: 5px;
            margin: 5px 0;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Efectos de hover */
        .menu > li:hover {
            background-color: #28a745;
            transform: translateX(10px); /* Deslizar a la derecha */
        }

        .submenu {
            display: none;
            list-style-type: none;
            padding-left: 20px;
            background-color: #444;
            margin-top: 10px;
            border-radius: 5px;
        }

        .submenu li {
            padding: 10px;
            text-align: left;
            font-size: 1em;
        }

        .menu > li:hover .submenu {
            display: block;
            animation: slideIn 0.5s ease-in-out;
        }

        /* Animación de deslizamiento */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Agregar imágenes dentro del menú (si se desea) */
        .menu img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        /* Responsive: Menú más pequeño en pantallas más pequeñas */
        @media (max-width: 768px) {
            .menu {
                width: 100%;
            }

            .menu > li {
                font-size: 1em;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

<header>
    Menú Desplegable Interactivo
</header>

<ul class="menu">
    <!-- Solo el enlace de "Inicio" redirige al inicio -->
    <li><a href="index.php"><img src="https://www.shutterstock.com/image-illustration/david-street-style-graphic-designtextile-600nw-2265632523.jpg" alt="Inicio">Inicio</a></li>

    <!-- Los demás elementos no tienen enlace -->
    <li>
        <a href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbJY9meHBDrf9vARpaTqGCaz57R7LppeGAbw&s" alt="Servicios">Servicios
        </a>
        <ul class="submenu">
            <li>Desarrollo Web</li>
            <li>Diseño Gráfico</li>
            <li>Marketing</li>
        </ul>
    </li>
    <li><a href="contacto.php"><img src="https://w7.pngwing.com/pngs/732/601/png-transparent-computer-icons-android-google-contacts-contact-rectangle-black-mobile-phones-thumbnail.png" alt="Contacto">Contacto</a></li>
    <li><a href="nosotros.php"><img src="https://previews.123rf.com/images/valentint/valentint1611/valentint161106587/66939247-acerca-de-nosotros-icono-acerca-de-nosotros-bot%C3%B3n-p%C3%A1gina-web-sobre-fondo-blanco.jpg" alt="Nosotros">Nosotros</a></li>
</ul>

</body>
</html>
