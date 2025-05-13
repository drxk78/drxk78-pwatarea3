<?php
// Definir el archivo donde se almacenará el contador
$file = 'contador.txt';

// Verificar si el archivo existe
if (file_exists($file)) {
    // Leer el valor actual del contador
    $contador = file_get_contents($file);
    // Incrementar el contador
    $contador++;
} else {
    // Si el archivo no existe, inicializamos el contador en 1
    $contador = 1;
}

// Guardar el nuevo valor del contador en el archivo
file_put_contents($file, $contador);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://static.vecteezy.com/system/resources/thumbnails/036/089/201/small/ai-generated-the-scanner-decodes-the-retinal-data-tech-security-access-technology-photo.jpg'); /* Fondo de pantalla */
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Cuadro centralizado */
        .container {
            width: 80%;
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semi-transparente */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .contador {
            font-size: 2em;
            font-weight: bold;
            color: #28a745; /* Color verde */
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        /* Botón de inicio */
        .button {
            padding: 15px 30px;
            font-size: 1.2em;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #218838;
        }

        /* Estilos para el pie de página */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Contador de Visitas</h1>
    <div class="contador">
        Visitas en esta página: <?php echo $contador; ?>
    </div>

    <!-- Botón de inicio -->
    <form action="index.php" method="get">
        <input type="submit" value="Volver al Inicio" class="button">
    </form>
</div>

<footer>
    <p>&copy; 2023 Página Web de Edison Lutuala</p>
</footer>

</body>
</html>
