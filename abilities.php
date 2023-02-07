<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="styleAbilities.css">
    <title>Habilidades de Pokémon</title>
</head>

<body>
    
    <center><div class="card">
        <img id="pokemonImage" src="" class="card-img-top" alt="Pokemon">
        <div class="card-body" style="justify-content: center">
          <h5 class="card-title">Habilidades del pokemon</h5>
          <ul class="card-text" id="pokemonAbilities"></ul>
          <a href="index.html" class="btn btn-primary">Volver a ver pokemones</a>
        </div>
      </div></center>
    
      <script src="script/abilities.js"></script>

      <center><form action="logout.php" method="post">
        <input type="submit" name="logout" value="Cerrar sesión" class="btn btn-danger mt-3">
    </form></center>
</body>
</html>