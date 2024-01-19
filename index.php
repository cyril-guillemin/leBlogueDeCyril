<?php
header("Cache-Control: min-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainArrierePourSupercar_mediumComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainAvantPourSupercar_mediumComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/v8pneumatique_mediumComp.webp" type="image/webp">
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Mécanique : Dernières réalisations en brique de construction technique</h2>
                <div class="div-section-div">
                    <a class="div-section-div-a" href="train_arriere_pour_supercar.php">
                        <figure class="div-section-div-a-figure">
                            <img class="div-section-div-a-figure-img" fetchpriority="high" src="img/trainArrierePourSupercar_mediumComp.webp" alt="Rendu en image" width="300" height="300">
                            <figcaption class="div-section-div-a-figure-figcaption">
                                <p class="div-section-div-a-figure-figcaption-p">Train arrière pour supercar</p>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="div-section-div-a" href="train_avant_pour_supercar.php">
                        <figure class="div-section-div-a-figure">
                            <img class="div-section-div-a-figure-img" fetchpriority="high" src="img/trainAvantPourSupercar_mediumComp.webp" alt="Rendu en image" width="300" height="300">
                            <figcaption class="div-section-div-a-figure-figcaption">
                                <p class="div-section-div-a-figure-figcaption-p">Train avant pour supercar</p>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="div-section-div-a" href="moteur_v8_pneumatique.php">
                        <figure class="div-section-div-a-figure">
                            <img class="div-section-div-a-figure-img" fetchpriority="high" src="img/v8pneumatique_mediumComp.webp" alt="Rendu en image" width="300" height="300">
                            </picture>
                            <figcaption class="div-section-div-a-figure-figcaption">
                                <p class="div-section-div-a-figure-figcaption-p">Moteur v8 pneumatique</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>
        </div>';?>
        <?php include 'footer.php';?>
        <?php echo '
        <script>
            function displayNav() {
                let nav = document.getElementById("nav");
                let navClass = nav.className;
                if(navClass == "header-no_nav") {
                    nav.className = "header-nav";
                }
                else {
                    nav.className = "header-no_nav";
                }
            }
            // window on load event
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>