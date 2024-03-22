<?php
include_once 'header.php';
?>

<body class="max-width:75%;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="d-md-none my-5">

        </div>
        <div class="container-fluid">
            <a class="navbar-brand">Lorcarte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Voir Les Offre</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Voir Les Demande</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Categorie</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"></a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary" href="#">Connection</a>
            </div>
        </div>
        </div>
    </nav>

    <section>
        <div class="mt-5 d-none d-lg-flex justify-content-around">
            <div class="carte">
                <img src="./images/disney-lorcana-tcg-carte-la-bete-carte-70-204-le-palais-des-goodies.png" style="width: 25rem;" alt="">
            </div>
            <div class="carte">
                <img src="./images/disney-lorcana-tcg-carte-donald-144-204-le-palais-des-goodies.png" style="width: 25rem;" alt="">
            </div>
            <div class="carte">
                <img src="./images/disney-lorcana-tcg-carte-malefique-carte-49-204-le-palais-des-goodies.png" style="width: 25rem;" alt="">
            </div>
        </div>
    </section>

</body>

<?php
include_once 'footer.php';
?>