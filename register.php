<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "pokemon");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuario creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<center>
<div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    <form action="" method="post" class="form-group">
                        <input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
                        <input type="email" name="email" placeholder="Correo electrónico" class="form-control">
                        <input type="password" name="password" placeholder="Contraseña" class="form-control">
                        <input type="password" name="confirm_password" placeholder="Confirmar contraseña" class="form-control">
                        <input type="submit" name="submit" value="Registrarse" class="btn btn-primary mt-3">
                        <a href="login.php" class="btn btn-primary">¿Iniciar sesion?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
