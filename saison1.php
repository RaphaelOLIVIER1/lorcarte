<?php
include_once("header.php");
?>
<nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid mx-5">
        <a class="navbar-brand text-light">Lorcarte</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="./index.php" class="nav-link  text-light">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light active" aria-current="page">Voir Les Offre</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Voir Les Demande</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Categorie &ensp;</a>
                    <ul class="sous bg-dark rounded">
                        <li><a class="text-light" href="#">Saison 1</a></li>
                        <li><a class="text-light" href="#">Saison 2</a></li>
                        <li><a class="text-light" href="#">Saison 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Deck</a>
                </li>
            </ul>
        </div>
        <div class="profil">
            <a class="btn btn-outline-light" href="#">Profile</a>
            <ul class="sous bg-dark rounded">
                <li><a class="text-light " href="#">Connection</a></li>
                <li><a class="text-light" href="#">Inscription</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class=" d-flex justify-content-center align-items-center flex-column mt-5">
    <div class="container-search m-3 rounded ">
        <div class="search d-flex align-items-center p-3">
            <div class="p-2" id="filtre"><img src="./images/filtre.png" alt=""></div>
            <div class="input-group d-flex  align-items-center">
                <div class="form-floating  d-flex  align-items-center">
                    <input type="text" class="form-control" id="floatingInput form1 searchBar" placeholder="name@example.com">
                    <label for="floatingInput">Search</label>
                </div>
                <button type="button" class="btn btn-primary p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="filter bg-white rounded m-2 p-4 flex-column align-items-center" id="content-filter">
        <h2>filtre</h2>
        <div class="d-flex align-items-evenly justify-content-evenly">
            <div class="p-2">
                <h3>Les étoiles</h3>
            </div>
            <div class="d-flex align-items-center">
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="allCheckbox">
                    <label class="form-check-label" for="allCheckbox">All</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">1</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                    <label class="form-check-label" for="secondCheckbox">2</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="thirtCheckbox">
                    <label class="form-check-label" for="thirtCheckbox">3</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                    <label class="form-check-label" for="fourthCheckbox">4</label>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-evenly justify-content-evenly rarete">
            <div class="p-2">
                <h3>Les raretés</h3>
            </div>
            <div class="d-flex align-items-center">
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="commun">
                    <label class="form-check-label" for="commun">Commun</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="superCommun">
                    <label class="form-check-label" for="superCommun">Peu Commun</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="rare">
                    <label class="form-check-label" for="rare">Rare</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="superRare">
                    <label class="form-check-label" for="superRare">Super Rare</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="legendaire">
                    <label class="form-check-label" for="legendaire">Légendaire</label>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-evenly justify-content-evenly">
            <div class="p-2">
                <h3>Exemple</h3>
            </div>
            <div class="d-flex align-items-center">
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="allCheckbox">
                    <label class="form-check-label" for="firstCheckbox">All</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">1</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                    <label class="form-check-label" for="firstCheckbox">2</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="thirtCheckbox">
                    <label class="form-check-label" for="firstCheckbox">3</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                    <label class="form-check-label" for="firstCheckbox">4</label>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-evenly justify-content-evenly">
            <div class="p-2">
                <h3>Exemple</h3>
            </div>
            <div class="d-flex align-items-center">
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="allCheckbox">
                    <label class="form-check-label" for="firstCheckbox">All</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">1</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                    <label class="form-check-label" for="firstCheckbox">2</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="thirtCheckbox">
                    <label class="form-check-label" for="firstCheckbox">3</label>
                </div>
                <div class="list-group-item p-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                    <label class="form-check-label" for="firstCheckbox">4</label>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="cartes d-flex justify-content-center">
        <div id="donald" class="carte_offre">
            <img src="./images/disney-lorcana-tcg-carte-donald-144-204-le-palais-des-goodies.png" alt="">
        </div>
        <div id="laBete" class="carte_offre">
            <img src="./images/disney-lorcana-tcg-carte-la-bete-carte-70-204-le-palais-des-goodies.png" alt="">
        </div>
        <div id="malefique" class="carte_offre">
            <img src="./images/disney-lorcana-tcg-carte-malefique-carte-49-204-le-palais-des-goodies.png" alt="">
        </div>


        <div class="carte_description">
            <button class="close btn btn-primary">Fermer</button>
            <div>
                <img src="./images/disney-lorcana-tcg-carte-donald-144-204-le-palais-des-goodies.png" alt="">
            </div>
            <div>
                <h1>Donald</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem harum molestiae voluptatem impedit suscipit ut!</p>
            </div>
        </div>
</section>

<?php
include_once("footer.php");
?>