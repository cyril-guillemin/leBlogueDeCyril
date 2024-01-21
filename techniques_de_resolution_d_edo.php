<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="img/premiereTechnique_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/premiereTechnique_largeComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/deuxiemeTechnique_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/deuxiemeTechnique_largeComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/formulePrincipale_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/formulePrincipale_largeComp.webp" type="image/webp">    
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php include 'message.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Première technique basé sur la méthode du rectangle</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_1" fetchpriority="high" src="img/premiereTechnique_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_1()" id="img_1">
                            <img class="div-section-div-article-figure-noDisplay_img_1" fetchpriority="high" src="img/premiereTechnique_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_1()" id="enlargeImg_1">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Simple à programmer notemment en Fortran.</li>
                            <li class="div-section-aside-ul-li">S\'adapte au type de problème considéré en ce sens qu\'on va se baser sur un algorithme le plus efficace possible quant à la résolution d\'un système linaire matricielle.</li>
                            <li class="div-section-aside-ul-li">A priori même niveaux de performance que la méthode de RK1 (Runge - Kutta ordre 1) : temps d\'éxecution et précision de calcul comparable. J\'ai réaliser des comparaisons entre ces deux techniques en langage python sur un même problème de départ pour arriver à ces conclusions.</li>
                            <li class="div-section-aside-ul-li">Mais comme plus facilement programmable que RK1 notement en Fortran qui est un langage optimiser pour le calcul, il y a un vrai intérêt par rapport au coût de précision de calcul et temps d\'éxecution.</li>
                            <li class="div-section-aside-ul-li">Le fait que cette technique est adaptable, on peux aussi choisir des algorithmes de résolution de système matricielle linéaire mois ou plus précis en calcul pour un temps d\'éxecution plus cours ou plus long respectivement.</li>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Deuxième technique basé sur la méthode du trapèze</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_2" fetchpriority="high" src="img/deuxiemeTechnique_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_2()" id="img_2">
                            <img class="div-section-div-article-figure-noDisplay_img_2" fetchpriority="high" src="img/deuxiemeTechnique_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_2()" id="enlargeImg_2">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Simple à programmer notemment en Fortran.</li>
                            <li class="div-section-aside-ul-li">S\'adapte au type de problème considéré en ce sens qu\'on va se baser sur un algorithme le plus efficace possible quant à la résolution d\'un système linaire matricielle.</li>
                            <li class="div-section-aside-ul-li">A priori même niveaux de performance que la méthode de RK2 (Runge - Kutta ordre 2) : temps d\'éxecution et précision de calcul comparable. J\'ai réaliser des comparaisons entre ces deux techniques en langage python sur un même problème de départ pour arriver à ces conclusions.</li>
                            <li class="div-section-aside-ul-li">Mais comme plus facilement programmable que RK2 notement en Fortran qui est un langage optimiser pour le calcul, il y a un vrai intérêt par rapport au coût de précision de calcul et temps d\'éxecution.</li>
                            <li class="div-section-aside-ul-li">Le fait que cette technique est adaptable, on peux aussi choisir des algorithmes de résolution de système matricielle linéaire mois ou plus précis en calcul pour un temps d\'éxecution plus cours ou plus long respectivement.</li>
                            <li class="div-section-aside-ul-li">Beaucoup plus précis que la première technique.</li>
                        </ul>
                    </aside>
                </div>
            </section>
            </div>
            <div class="div">
                <section class="div-section">
                    <h2 class="div-section-h2">Formulation générale des deux techniques</h2>
                    <div class="div-section-div">
                        <article class="div-section-div-article">
                            <h3 class="div-section-div-article-h3">Rendu en image</h3>
                            <figure class="div-section-div-article-figure">
                                <img class="div-section-div-article-figure-img_3" fetchpriority="high" src="img/formulePrincipale_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_3()" id="img_3">
                                <img class="div-section-div-article-figure-noDisplay_img_3" fetchpriority="high" src="img/formulePrincipale_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_3()" id="enlargeImg_3">
                            </figure>
                        </article>
                        <aside class="div-section-div-aside">
                            <p class="div-section-div-aside-p">Description</p>
                            <ul class="div-section-div-aside-ul">
                                <li class="div-section-aside-ul-li">Ces deux techniques peuvent s\'écrire de manière générale de la forme alpha khi = bêta.</li>
                                <li class="div-section-aside-ul-li">En effet, l\'idée commune à ces deux techniques étant de transformer le système d\'équation différentielle de départ en un système linaire matricielle.</li>
                            </ul>
                        </aside>
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
            
            function enlargeReduceImg_1() {
                let img1_1 = document.getElementById("img_1");
                let imgClass1_1 = img1_1.className;
                if(imgClass1_1 == "div-section-div-article-figure-img_1") {
                    img1_1.className = "div-section-div-article-figure-noDisplay_img_1";
                }
                else {
                    img1_1.className = "div-section-div-article-figure-img_1";
                }
                let img2_1 = document.getElementById("enlargeImg_1");
                let imgClass2_1 = img2_1.className;
                if(imgClass2_1 == "div-section-div-article-figure-noDisplay_img_1") {
                    img2_1.className = "div-section-div-article-figure-enlarge_img_1";
                }
                else {
                    img2_1.className = "div-section-div-article-figure-noDisplay_img_1";
                }
            
            }

            function enlargeReduceImg_2() {
                let img1_2 = document.getElementById("img_2");
                let imgClass1_2 = img1_2.className;
                if(imgClass1_2 == "div-section-div-article-figure-img_2") {
                    img1_2.className = "div-section-div-article-figure-noDisplay_img_2";
                }
                else {
                    img1_2.className = "div-section-div-article-figure-img_2";
                }
                let img2_2 = document.getElementById("enlargeImg_2");
                let imgClass2_2 = img2_2.className;
                if(imgClass2_2 == "div-section-div-article-figure-noDisplay_img_2") {
                    img2_2.className = "div-section-div-article-figure-enlarge_img_2";
                }
                else {
                    img2_2.className = "div-section-div-article-figure-noDisplay_img_2";
                }
            
            }

            function enlargeReduceImg_3() {
                let img1_3 = document.getElementById("img_3");
                let imgClass1_3 = img1_3.className;
                if(imgClass1_3 == "div-section-div-article-figure-img_3") {
                    img1_3.className = "div-section-div-article-figure-noDisplay_img_3";
                }
                else {
                    img1_3.className = "div-section-div-article-figure-img_3";
                }
                let img2_3 = document.getElementById("enlargeImg_3");
                let imgClass2_3 = img2_3.className;
                if(imgClass2_3 == "div-section-div-article-figure-noDisplay_img_3") {
                    img2_3.className = "div-section-div-article-figure-enlarge_img_3";
                }
                else {
                    img2_3.className = "div-section-div-article-figure-noDisplay_img_3";
                }
            
            }

            // window on load event
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>