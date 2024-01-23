<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="img/schemaDuCerveauMecanique_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/schemaDuCerveauMecanique_largeComp.webp" type="image/webp">  
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php include 'message.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Le cerveau mécanique</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_1" fetchpriority="high" src="img/schemaDuCerveauMecanique_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_1()" id="img_1">
                            <img class="div-section-div-article-figure-noDisplay_img_1" fetchpriority="high" src="img/schemaDuCerveauMecanique_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_1()" id="enlargeImg_1">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Il s\'agit de montrer ma vision d\'une architecture de cerveau mécanique.</li>
                            <li class="div-section-aside-ul-li">En vue d\'une approche mécanique de la mémoire.</li>
                            <li class="div-section-aside-ul-li">Le plus important c\'est que pour moi le cerveau mécanique est gérer par un coeur, un coeur qui a notion du bien et du mal et choisit toujours le bien pour prendre une décision.</li>
                            <li class="div-section-aside-ul-li">Ce coeur est basé sur un instinct de survie. Pour moi c\'est l\'unique loi qui doit régir une machine capable d\'apprendre par elle même. C\'est ce qui la rend intelligente.</li>
                            <li class="div-section-aside-ul-li">Le reseaux neuronaux quand à lui est la pour permettre une conscience de la machine par automatique : il est basé sur un circuit logique auto programmable avec une partie réservé par une connaissance des mathématiques et l\'obligation de copier la nature.</li>
                            <li class="div-section-aside-ul-li">Les capteurs renseignent de l\'environnement extérieur puis il y a après traitement de l\'information des actions primordiales de déplacements et de copiage de la nature.</li>
                            <li class="div-section-aside-ul-li">Ce copiage entre de nouveaux en interne pas l\'intermédiaire des capteurs afin que la machine est connaissance de ses performances, c\'est ce qui permet la conscience de la machine.</li>
                            <li class="div-section-aside-ul-li">Les zones mémorielles sont protégées les unes des autres par des frontières mais il y a des points de connexions entre celles ci et le réseaux neuronaux. Les comparaisons ce font entre la partie droite (D) et gauche (G) par symétrie dans le réseau de neuronnes.</li>
                            <li class="div-section-aside-ul-li">Les neuronnes sont fixe dans l\'espace, ils ont tous une place spécifique et des rôles particuliers.</li>
                            <li class="div-section-aside-ul-li">La machine est cadencé par une certaine fréquence avec une horloge électronique.</li>
                            <li class="div-section-aside-ul-li">La mémoire est constitué d\'un réseaux de case et de points à l\'intérieur de celle ci. Quand ce point atteind une dimension assez grande finie dans le temps alors il y a mémoire. Et a contario si sa taille est petite alors il n\'y a pas de 1 logique mémoriser, on a donc un 0 logique.</li>
                            <li class="div-section-aside-ul-li">Une grandeur physique entre pour faire grossir ce point pour mémoriser l\'information. De même sur une autre entrée une grandeur physique permet de réduire les dimensions de ce point pour effacement. Cela constitue l\'écriture.</li>
                            <li class="div-section-aside-ul-li">Quand on est sur un 1 logique il y a une conduction électrique entre une entré et une sortie, c\'est la lecture.</li>
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

            // window on load event
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>