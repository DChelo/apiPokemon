const pokeList = document.getElementById("pokemon-list");

fetch("https://pokeapi.co/api/v2/pokemon?limit=151")
    .then(response => response.json())
    .then(data => {
        pokeList.innerHTML = "";
        data.results.forEach(pokemon => {
            const pokemonLi = document.createElement("li");
            pokemonLi.innerHTML = pokemon.name;
            pokemonLi.addEventListener("click", function () {
                window.location.href = `abilities.php?pokemon=${pokemon.name}`;
            });
            pokeList.appendChild(pokemonLi);
        });
    });