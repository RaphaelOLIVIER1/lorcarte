<?php
include_once('header.php');
?>

<body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid mx-5">
            <a class="navbar-brand text-light">Lorcarte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="#" class="nav-link active text-light" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Voir Les Offre</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Voir Les Demande</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Categorie &ensp;</a>
                        <ul class="sous bg-dark rounded">
                            <li><a class="text-light" href="./saison1.php">Saison 1</a></li>
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
                <ul class="sous  bg-dark rounded">
                    <li><a class="text-light " href="#">Connection</a></li>
                    <li><a class="text-light" href="#">Inscription</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="affiche d-none d-lg-flex align-items-center justify-content-center">
        <div class=" d-none d-lg-flex justify-content-around align-items-center" id="fond">
            <div class="carte">
                <img src="./images/disney-lorcana-tcg-carte-la-bete-carte-70-204-le-palais-des-goodies.png" alt="">
                <img src="./images/disney-lorcana-tcg-carte-donald-144-204-le-palais-des-goodies.png" alt="">
                <img src="./images/disney-lorcana-tcg-carte-malefique-carte-49-204-le-palais-des-goodies.png" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="marchant d-sm-block d-md-flex justify-content-evenly">
            <div class="demande bg-white  rounded m-5 ">
                <div class=" title bg-primary text-light py-1 px-3">Dernière Offres</div>
                <div class="">
                    <div class="d-flex justify-content-around bg-body-secondary  rounded">
                        <div class="ms-4">Magasin</div>
                        <div class="">Affaire</div>
                        <div class="">Mise à Jour</div>
                    </div>
                    <a href="#" class="d-flex justify-content-around align-items-center">
                        <div class="user d-flex align-items-center py-3">
                            <img src=" ./images/profil.jpg" alt="">
                            <h1 class="m-2">Raphaël</h1>
                        </div>
                        <div class="business bg-primary rounded-circle">
                            <img src="./images/icone-fleche-droite-noir.png" alt="">
                        </div>
                        <time datetime="">Il y a 24 minutes</time>
                    </a>
                </div>
            </div>
            <div class="demande bg-white rounded m-5 ">
                <div class=" title bg-primary text-light py-1 px-3">Dernière Demandes</div>
                <div class="">
                    <div class="d-flex justify-content-around bg-body-secondary  rounded">
                        <div class="ms-4">Magasin</div>
                        <div class="">Affaire</div>
                        <div class="">Mise à Jour</div>
                    </div>
                    <a href="#" class="d-flex justify-content-around align-items-center">
                        <div class="user d-flex align-items-center py-3">
                            <img src=" ./images/profil.jpg" alt="">
                            <h1 class="m-2">Raphaël</h1>
                        </div>
                        <div class="demander bg-primary rounded-circle">
                            <img src="./images/icone-fleche-droite-noir.png" alt="">
                        </div>
                        <time datetime="">Il y a 24 minutes</time>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
include_once('footer.php');
?>