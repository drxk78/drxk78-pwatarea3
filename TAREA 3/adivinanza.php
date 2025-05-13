<?php
session_start();

// Iniciar las variables para los intentos y respuestas
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if (!isset($_SESSION['respuesta'])) {
    $_SESSION['respuesta'] = rand(1, 100); // Respuesta aleatoria para el número
}

if (!isset($_SESSION['respuesta_palabra'])) {
    $_SESSION['respuesta_palabra'] = 'manzana'; // Respuesta para la adivinanza de palabra
}

if (!isset($_SESSION['respuesta_operacion'])) {
    $_SESSION['respuesta_operacion'] = 25; // Respuesta para la operación matemática
}

// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respuesta_usuario = $_POST['respuesta'];

    // Comprobar si el intento es correcto para cada juego
    $acierto_numero = false;
    $acierto_palabra = false;
    $acierto_operacion = false;

    // Adivinanza número
    if ($_SESSION['intentos'] < 3 && isset($_POST['adivinanza_numero']) && $_POST['adivinanza_numero'] == $_SESSION['respuesta']) {
        $acierto_numero = true;
    }

    // Adivinanza palabra
    if ($_SESSION['intentos'] < 3 && isset($_POST['adivinanza_palabra']) && strtolower($_POST['adivinanza_palabra']) == $_SESSION['respuesta_palabra']) {
        $acierto_palabra = true;
    }

    // Adivinanza operación
    if ($_SESSION['intentos'] < 3 && isset($_POST['adivinanza_operacion']) && $_POST['adivinanza_operacion'] == $_SESSION['respuesta_operacion']) {
        $acierto_operacion = true;
    }

    // Si el jugador acertó alguna
    if ($acierto_numero || $acierto_palabra || $acierto_operacion) {
        $mensaje = "¡Felicidades! Has adivinado correctamente.";
        $color = "green";
        $_SESSION['intentos'] = 0; // Reiniciar los intentos
    } else {
        $_SESSION['intentos']++;
        if ($_SESSION['intentos'] == 3) {
            $mensaje = "Lo siento, has agotado los intentos. La respuesta correcta es: ";
            if (!$acierto_numero) {
                $mensaje .= "<br>El número era: " . $_SESSION['respuesta'];
            }
            if (!$acierto_palabra) {
                $mensaje .= "<br>La palabra era: " . $_SESSION['respuesta_palabra'];
            }
            if (!$acierto_operacion) {
                $mensaje .= "<br>La operación era: " . $_SESSION['respuesta_operacion'];
            }
            $color = "red";
            $_SESSION['intentos'] = 0; // Reiniciar los intentos después de 3 fallos
        } else {
            $mensaje = "¡Vuelve a intentarlo! Te quedan " . (3 - $_SESSION['intentos']) . " intentos.";
            $color = "orange";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanza</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://media.istockphoto.com/id/1308686218/es/foto/signo-de-interrogaci%C3%B3n-blanco-en-fondo-azul-con-espacio-de-copia-vac%C3%ADo-en-el-lado-izquierdo.jpg?s=612x612&w=0&k=20&c=8pcRpAQ3_TfTD38s4fxY5Vealf3FzOIZLGu-Ds2Uv_I='); /* Fondo de pantalla */
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Cuadro centralizado */
        .container {
            width: 80%;
            max-width: 600px;
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

        .mensaje {
            font-size: 1.5em;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }

        .mensaje.green {
            background-color: green;
            color: white;
        }

        .mensaje.red {
            background-color: red;
            color: white;
        }

        .mensaje.orange {
            background-color: orange;
            color: white;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            font-size: 1em;
            margin: 10px;
            border-radius: 5px;
            border: none;
            width: 70%;
            background-color: #fff;
            color: #333;
        }

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
    <h1>¡Adivina el número, palabra o operación!</h1>

    <!-- Mensaje de resultado -->
    <?php if (isset($mensaje)): ?>
        <div class="mensaje <?php echo $color; ?>">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <!-- Juego de adivinanza -->
    <form method="POST">
        <!-- Adivinanza de número -->
        <div>
            <label for="adivinanza_numero">Adivina un número entre 1 y 100:</label><br>
            <input type="number" name="adivinanza_numero" required>
        </div>
        
        <!-- Adivinanza de palabra -->
        <div>
            <label for="adivinanza_palabra">Adivina la palabra (es una fruta):</label><br>
            <input type="text" name="adivinanza_palabra" required>
        </div>

        <!-- Adivinanza de operación -->
        <div>
            <label for="adivinanza_operacion">¿Cuánto es 5 + 20?</label><br>
            <input type="number" name="adivinanza_operacion" required>
        </div>

        <input type="submit" value="Comprobar" class="button">
    </form>

    <!-- Botón para volver al inicio -->
    <form action="index.php" method="get">
        <input type="submit" value="Volver al Inicio" class="button">
    </form>
</div>

<footer>
    <p>&copy; 2023 Página Web de Edison Lutuala</p>
</footer>

</body>
</html>
