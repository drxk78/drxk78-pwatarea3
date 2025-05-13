<?php
session_start();

// Conexión a la base de datos
$host = 'localhost';
$dbname = 'sistema_login';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Comprobar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comprobamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $clave = $_POST['password'];

    // Verificamos el usuario y la contraseña en la base de datos
    $sql = "SELECT * FROM usuarios WHERE username = '$usuario'";
    $result = $conn->query($sql);

    // Si encontramos el usuario, verificamos la contraseña
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($clave, $row['password'])) {
            $_SESSION['username'] = $usuario;
            header('Location: index.php'); // Redirigir a la página principal
            exit();
        } else {
            $error_message = "Error de credenciales"; // Mensaje de error si la contraseña es incorrecta
        }
    } else {
        $error_message = "Error de credenciales"; // Mensaje de error si el usuario no se encuentra
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Estilo para el cuadro de error */
        .error {
            background-color: #f44336; /* Rojo */
            color: white;
            padding: 15px;
            margin-top: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #28a745;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Nombre de Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar">
    </form>

    <!-- Mostrar mensaje de error si existe -->
    <?php
    if (isset($error_message)) {
        echo "<div class='error'>$error_message</div>";
    }
    ?>

    <div class="register-link">
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>
</div>

</body>
</html>
