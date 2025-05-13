<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2ypJ0ysR0sNTgk8QJL9bUU4XhE1gFBxq06g&s'); /* Fondo de pantalla */
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Contenedor principal de la galería */
        .container {
            width: 90%;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        /* Título */
        h1 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #fff;
        }

        /* Estilo de los cuadros de las imágenes */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .image-box {
            width: 250px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6); /* Fondo oscuro con transparencia */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-box:hover {
            transform: scale(1.05); /* Efecto de escala al pasar el ratón */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .image-box img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .image-box p {
            font-size: 1.1em;
            color: #fff;
            margin-top: 10px;
            text-align: center;
        }

        /* Botón para volver al inicio */
        .button {
            padding: 15px 30px;
            font-size: 1.2em;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #218838;
        }

        /* Responsive: Diseño para dispositivos móviles */
        @media (max-width: 768px) {
            .gallery {
                flex-direction: column;
                align-items: center;
            }

            .image-box {
                width: 80%;
                margin-bottom: 30px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Galería de Imágenes</h1>

    <div class="gallery">
        <!-- Cuadro con imagen y descripción -->
        <div class="image-box">
            <img src="https://content.elmueble.com/medio/2023/03/29/chihuahua-de-color-blanco-y-tostado_4093fa98_230329114730_1000x1500.jpg" alt="Imagen 1">
            <p>El perrito de raza pequeña por excelencia es el chihuahua. Es el más pequeño del mundo, y también el más longevo (puede llegar a vivir 20 años). </p>
        </div>

        <div class="image-box">
            <img src="https://content.elmueble.com/medio/2025/01/29/boston-terrier_c5bee00e_1831176667_250129103751_1000x1334.webp" alt="Imagen 2">
            <p>El Boston Terrieres un perro pequeño pero robusto, conocido por su carácter afectuoso, inteligente y enérgico. Es sociable y leal, lo que lo convierte en un excelente compañero para familias, solteros y personas mayores. </p>
        </div>

        <div class="image-box">
            <img src="https://content.elmueble.com/medio/2023/11/07/perro-pekines_b1d45f9f_231107142930_1000x665.jpg" alt="Imagen 3">
            <p>El Pekinés es una raza pequeña, conocida por su apariencia majestuosa y su carácter independiente. A pesar de su tamaño compacto, los Pekineses son valientes y alerta, con un fuerte vínculo con sus dueños. </p>
        </div>

        <div class="image-box">
            <img src="https://content.elmueble.com/medio/2023/03/29/beagle_6e3106f2_230329115118_1000x1000.jpg" alt="Imagen 4">
            <p>El beagle se puede considerar un perrito pequeño que podría encajar también en los de tamaño mediano y, además, es una raza que, en sus orígenes, era de caza. Destaca por su carácter juguetón, extrovertido, cariñoso y fiel.</p>
        </div>
    </div>

    <!-- Botón para ir al inicio -->
    <form action="index.php" method="get">
        <input type="submit" value="Volver al Inicio" class="button">
    </form>
</div>

</body>
</html>
