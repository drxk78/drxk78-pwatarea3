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

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $usuario = $_POST['username'];
    $clave = $_POST['password'];
    $clave_confirm = $_POST['confirm_password'];

    // Verificar si las contraseñas coinciden
    if ($clave !== $clave_confirm) {
        $error_message = "Las contraseñas no coinciden.";
    } else {
        // Verificar si el nombre de usuario o correo ya existen
        $sql = "SELECT * FROM usuarios WHERE username = '$usuario' OR email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $error_message = "El nombre de usuario o el correo electrónico ya están en uso.";
        } else {
            // Hashear la contraseña
            $hashed_password = password_hash($clave, PASSWORD_DEFAULT);

            // Insertar los datos en la base de datos
            $sql_insert = "INSERT INTO usuarios (nombre, email, username, password) 
                           VALUES ('$nombre', '$email', '$usuario', '$hashed_password')";
            if ($conn->query($sql_insert) === TRUE) {
                // Redirigir al login después de un registro exitoso
                header('Location: login.php');
                exit();
            } else {
                $error_message = "Error al registrar el usuario: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

        .register-container {
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

        input[type="text"], input[type="email"], input[type="password"] {
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

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #28a745;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Regístrate</h2>
    <form action="registro.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre Completo" required>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="text" name="username" placeholder="Nombre de Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
        <input type="submit" value="Registrarse">
    </form>

    <?php
    // Mostrar mensaje de error si existe
    if (isset($error_message)) {
        echo "<div class='error'>$error_message</div>";
    }
    ?>

    <div class="login-link">
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</div>

</body>
</html>
