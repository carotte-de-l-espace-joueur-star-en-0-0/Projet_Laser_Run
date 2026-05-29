<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<title>Dashboard élèves</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="menu">

        <button onclick="toggleMenu()">Statistiques</button>

        <div id="menu" class="dropdown-content">
            <a href="#">Par élève</a>
            <a href="#">Par dates</a>
            <a href="#">Par années</a>
            <a href="#">Par classes</a>
        </div>

    </div>

    <div class="content">

        <h2>Élèves</h2>

        <div id="listeEleves" class="eleves-container">

            <div class="card ajouter" onclick="ouvrirPopup()">

                <div class="plus">+</div>
                <p>Ajouter élève</p>

            </div>

        </div>

    </div>

</div>

<!-- POPUP -->

<div id="overlay" class="overlay">

    <div class="popup">

        <h2>Ajouter un élève</h2>

        <form id="formEleve">

            <input type="text" name="nom" placeholder="Nom" required>
            <br><br>

            <input type="text" name="prenom" placeholder="Prénom" required>
            <br><br>

            <input type="text" name="classe" placeholder="Classe" required>
            <br><br>

            <button type="submit">Valider</button>

        </form>

    </div>

</div>

<script>

function toggleMenu(){

    document.getElementById("menu").classList.toggle("show-menu");

}

function ouvrirPopup(){

    document.getElementById("overlay").classList.add("show-overlay");

}

function fermerPopup(){

    document.getElementById("overlay").classList.remove("show-overlay");

}

const formulaire = document.getElementById("formEleve");

formulaire.addEventListener("submit", function(event){

    event.preventDefault();

    let nom = formulaire.nom.value;
    let prenom = formulaire.prenom.value;
    let classe = formulaire.classe.value;

    let nouvelleCarte = document.createElement("div");

    nouvelleCarte.classList.add("card");

    nouvelleCarte.innerHTML = `
    
        <h3>${prenom} ${nom}</h3>
        <p>${classe}</p>

    `;

    let liste = document.getElementById("listeEleves");

    liste.appendChild(nouvelleCarte);

    fermerPopup();

    formulaire.reset();

});

</script>

</body>
</html>