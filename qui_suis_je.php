<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="img/maPhoto_mediumComp.webp" type="image/webp">
        <link rel="preload" fetchpriority="high" as="image" href="img/maPhoto_largeComp.webp" type="image/webp">    
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php include 'message.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Qui suis-je ?</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_1" fetchpriority="high" src="img/maPhoto_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_1()" id="img_1">
                            <img class="div-section-div-article-figure-noDisplay_img_1" fetchpriority="high" src="img/maPhoto_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_1()" id="enlargeImg_1">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Un passioné de sciences et techniques avant tout.</li>
                            <li class="div-section-aside-ul-li">Ancien diplomé à bac +3 de l\'INSSET en ingénierie industrielle. Cette formation à été découpé sur deux ans de prépa (groupe Polyméca).</li>
                            <li class="div-section-aside-ul-li">Cela c\'est donc suivit d\'une licence sciences pour l\'ingénieur parcours ingénierie industrielle.</li>
                            <li class="div-section-aside-ul-li">Sur les 2 ans de prépa j\'ai étudier les mathématiques et l\'informatique sur un temps moyen, la physique en majeur et la chimie en mineur ainsi que les sciences et technologies industrielles sur un temps moyen.</li>
                            <li class="div-section-aside-ul-li">En licence, j\'ai commencé à me spécialiser en mécanique orienté énergétique puis électronique électrotechnique et automatique.</li>
                            <li class="div-section-aside-ul-li">Ensuite j\'ai entamé un master génie industrielle à Strasbourg mais qui ne me convenait pas car il n\'y avait pas assez de cours orienté sciences et technique à mon goût, c\'était plus de la gestion de projets industrielles. J\'y est quand même développé mes connaissances en transmission de puissance mécanique.</li>
                            <li class="div-section-aside-ul-li">Je me retrouve donc inscrit en master gestion de l\'énergie de Poitiers, bien que je m\'y retrouve je tombe malade, je valide 4 enseignements tout de même.</li>
                            <li class="div-section-aside-ul-li">Aujourd\'hui je suis guérie de cette maladie et je compte terminer ce que j\'ai commencé à Poitiers.</li>
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