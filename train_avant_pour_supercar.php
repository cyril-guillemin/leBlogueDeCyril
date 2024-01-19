<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainAvantPourSupercar_mediumComp.webp" type="image/webp">
        <link rel="prefetch" fetchpriority="high" as="image" href="img/trainAvantPourSupercar_largeComp.webp" type="image/webp">    
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
                            <img class="div-section-div-article-figure-img" fetchpriority="high" src="img/trainAvantPourSupercar_mediumComp.webp" alt="Rendu en image" width="300" height="300" onclick="enlargeReduceImg()" id="img">
                            <img class="div-section-div-article-figure-noDisplay_img" fetchpriority="high" src="img/trainAvantPourSupercar_largeComp.webp" alt="Rendu en image" width="1024" height="1024" onclick="enlargeReduceImg()" id="enlargeImg">
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
            function enlargeReduceImg() {
                let img1 = document.getElementById("img");
                let imgClass1 = img1.className;
                if(imgClass1 == "div-section-div-article-figure-img") {
                    img1.className = "div-section-div-article-figure-noDisplay_img";
                }
                else {
                    img1.className = "div-section-div-article-figure-img";
                }
                let img2 = document.getElementById("enlargeImg");
                let imgClass2 = img2.className;
                if(imgClass2 == "div-section-div-article-figure-noDisplay_img") {
                    img2.className = "div-section-div-article-figure-enlarge_img";
                }
                else {
                    img2.className = "div-section-div-article-figure-noDisplay_img";
                }
            
            }
            // window on load event
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>