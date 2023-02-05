
const pokemonImage = document.querySelector("#pokemonImage");
const pokemonAbilities = document.querySelector("#pokemonAbilities");
const pokemonName = new URLSearchParams(window.location.search).get("pokemon");

fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`)
    .then(response => response.json())
    .then(pokemonData => {
        pokemonImage.src = pokemonData.sprites.front_default;
        pokemonAbilities.innerHTML = pokemonData.abilities
            .map(ability => ability.ability.name)
            .join("<br>");
    });
