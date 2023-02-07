<?php
session_start();

// Conexión a la base de datos
$conn = mysqli_connect("127.0.0.1", "root", "", "pokemon");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Consulta para obtener el usuario
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // Verificar si la combinación de usuario y contraseña es válida
    if ($user && password_verify($password, $user['password'])) {
        // Iniciar sesión
        $_SESSION['user'] = $user;

        // Redirigir a la página protegida
        header("Location: abilities.php");
        exit;
    } else {
        echo "Usuario o contraseña inválidos";
    }
}

mysqli_close($conn);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<center>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="row">
            <!-- Tarjeta de inicio de sesión -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Inicio de sesión</div>
                    <div class="card-body">
                        <!-- Formulario de inicio de sesión -->
                        <form action="" method="post" class="form-group">
                            <input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
                            <input type="password" name="password" placeholder="Contraseña" class="form-control">
                            <input type="submit" name="submit" value="Iniciar sesión" class="btn btn-primary mt-3">
                            <a href="register.php" class="btn btn-primary">¿Registrarse?</a>
                        </form>
                    </div>
                </div>
            </div>
</center>