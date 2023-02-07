<?php
session_start();

$conn = mysqli_connect("127.0.0.1", "root", "", "pokemon");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user;

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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Inicio de sesión</div>
                    <div class="card-body">
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