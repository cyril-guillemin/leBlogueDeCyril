<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="img/v8pneumatique_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/v8pneumatique_largeComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/2l6_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/2l6_largeComp.webp" type="image/webp">
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php include 'message.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Moteur v8 pneumatique fictif pour son mécanique</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_1" fetchpriority="high" src="img/v8pneumatique_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_1()" id="img_1">
                            <img class="div-section-div-article-figure-noDisplay_img_1" fetchpriority="high" src="img/v8pneumatique_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_1()" id="enlargeImg_1">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">V de 90° donc idéal pour couplage avec un ou trois autre v (moteur en mode 2l ou 4l).</li>
                            <li class="div-section-aside-ul-li">Montage de moteur à n v sur le même principe que celui-ci, il suffit d\'ajouter ou d\'enlever un groupe v2 pour obtenir un moteur de n v2.</li>
                            <li class="div-section-aside-ul-li">
                                Compatible en mode 2l au <a class="div-section-div-aside-ul-li-a" href="train_arriere_pour_supercar.php">train arrière pour supercar</a> qui est équipé d\'un différentiel à double plateau conique.
                            </li>
                            <li class="div-section-aside-ul-li">Le but est de venir le motoriser électriquement pour obtenir un son mécanique.</li>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Exemple d\'application : 2l6</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_2" fetchpriority="high" src="img/2l6_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_2()" id="img_2">
                            <img class="div-section-div-article-figure-noDisplay_img_2" fetchpriority="high" src="img/2l6_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_2()" id="enlargeImg_2">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Le moteur électrique entraîne le 2l6 afin qu\'il génère un son mécanique.</li>
                            <li class="div-section-aside-ul-li">Le moteur électrique entraîne également une série d\'engrenages qui rend possible la liaison avec le train arrière pour supercar.</li>
                            <li class="div-section-aside-ul-li">Remarquons que les sorties d\'aires que composent chacun des vérins pneumatiques du 2l6 peuvent être reliées à des pots d\'échappements par l\'intermédiaire de conduites.</li>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Application fnale : chassi pour supercar</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_3" fetchpriority="high" src="img/chassiComplet_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_3()" id="img_3">
                            <img class="div-section-div-article-figure-noDisplay_img_3" fetchpriority="high" src="img/chassiComplet_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_3()" id="enlargeImg_3">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">C\'est un exemple simple de chassi monoplace.</li>
                            <li class="div-section-aside-ul-li">Le chassi est construit en module : chassi principal (du milieu) + 2l6 + train arrière + train avant puis quelques éléments de constructions pour finaliser ce chassi.</li>
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