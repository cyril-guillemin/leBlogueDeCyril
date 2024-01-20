<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainAvantPourSupercar_mediumComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainAvantPourSupercar_largeComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/chassiComplet_mediumComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/chassiComplet_largeComp.webp" type="image/webp">    
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Train avant pour supercar</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img_1" fetchpriority="high" src="img/trainAvantPourSupercar_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_1()" id="img_1">
                            <img class="div-section-div-article-figure-noDisplay_img_1" fetchpriority="high" src="img/trainAvantPourSupercar_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_1()" id="enlargeImg_1">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">
                                Adapter niveau dimension au <a class="div-section-div-aside-ul-li-a" href="train_arriere_pour_supercar.php">train arrière pour supercar.</a>
                            </li>
                            <li class="div-section-aside-ul-li">Direction à double pignon.</li>
                            <li class="div-section-aside-ul-li">Freins à disques avec étrier fictif.</li>
                            <li class="div-section-aside-ul-li">Double suspension courte à plat par roue.</li>
                            <li class="div-section-aside-ul-li">Architecture solide (montage en H).</li>
                            <li class="div-section-aside-ul-li">Compatible avec les roues du set lego technic 42143 (Ferrari Daytona SP3).</li>
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
                            <img class="div-section-div-article-figure-img_2" fetchpriority="high" src="img/chassiComplet_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg_2()" id="img_2">
                            <img class="div-section-div-article-figure-noDisplay_img_2" fetchpriority="high" src="img/chassiComplet_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg_2()" id="enlargeImg_2">
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

            // window on load event
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>