<?php
if (isset($_POST['ajoutm'])) {
    # code...
    require("connexion.php");
    $basetest->exec("insert into inscription(nom,prenom,age,section) values('"
        . $_POST['nomm'] . "','" . $_POST['prenomm'] . "','" . $_POST['agem'] . "','" . $_POST['sectionm'] . "')");
    echo ("Ajout fait avec succés");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royaume des anges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">
</head>

<body>

    <header>
        <!-- As a heading -->
        <nav class="navbar">
            <span class="navbar-brand mb-0 h1">Le royaume des anges</span>
        </nav>
        <br><br><br>

        <main>
    </header>
    <section>
        <!-- container : laisser ume marge a droite et gauche et on l'utilise pour le menu principale -->
        <!-- container-fluide :on l'utilise pour le header et footer -->

        <div class="row">
            <div class="col-12 col-md-2" style="margin-left: 3%;">

                <div class="row" id="car1">
                    <img src="Dama.png" class="img1" alt="">
                    <div class="btn0">
                        <button class="btn">Acceuil</button>
                        <button class="btn">Nos Activités</button>
                        <button class="btn">Inscription</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9" id="car2">
                <h3 class="na" style="color: #9a1213;">Nos activités</h3>
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <div class="row"></div>
                        <div class="col-12 col-md-12">
                            <img src="DonaldText.png" class="img5" alt="">
                        </div>
                        <br>
                        <div class="col-12 col-md-12">
                            <h5 style="color: #9a1213;">Peinture</h5>

                            <p class="alligner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                voluptatibus. Eligendi ducimus adipisci corrupti dignissimos eum, culpa
                                alias
                                omnis eveniet blanditiis velit quaerat expedita aut, odit, facilis provident
                                sunt! Cupiditate.</p>
                        </div>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row"></div>
                        <div class="col-12 col-md-12">
                            <h5 style="color: #9a1213;" class="media">Dessin</h5>

                            <p class="alligner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                voluptatibus. Eligendi ducimus adipisci corrupti dignissimos eum, culpa
                                alias
                                omnis eveniet blanditiis velit quaerat expedita aut, odit, facilis provident
                                sunt! Cupiditate.</p>
                            <br>
                            <div class="col-12 col-md-12">
                                <img src="Goofi2.png" class="img5" alt="">
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-4">
                        <div class="row"></div>
                        <div class="col-12 col-md-12">
                            <img src="Juanito.png" class="img5" alt="">
                        </div>
                        <br>
                        <div class="col-12 col-md-12">
                            <h5 style="color: #9a1213;">Langues étrangères</h5>

                            <p class="alligner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus,
                                voluptatibus. Eligendi ducimus adipisci corrupti dignissimos eum, culpa
                                alias
                                omnis eveniet blanditiis velit quaerat expedita aut, odit, facilis provident
                                sunt! Cupiditate.</p>
                        </div>

                    </div>
                    <br>
                    <h3 class="ei" style="color: #9a1213;">Espace Inscription</h3>

                    <div class="col-12 col-md-12" id="car21">
                        <form action="index.php" method="post">
                            <div class="form-row">
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nomm">

                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenomm">

                                <label for="age">Âge :</label>
                                <input type="number" id="age" name="agem">

                                <label for="section">Section :</label>
                                <input type="text" id="section" name="sectionm" placeholder="......................................................" style="border: none;">

                                <button type="submit" name="ajoutm" class="btn">Valider</button>
                            </div>
                        </form>

                    </div>




                </div>
            </div>

        </div>


    </section>
    </main>





    <br><br>
    <footer class="footer">
        <span class="footer-brand mb-0 h5 ">La marque de confiance des mamans</span>
    </footer>
</body>


<script src="section.js"></script>

</html>