<?php echo '
<!doctype html>
<html lang="fr">'
?>
    <?php include 'head.php';?>
    <?php echo '
    <body>'?>
        <?php include 'header.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Train avant pour supercar</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img" src="train_avant_pour_supercar.webp" alt="Rendu en image" width="1280" height="960" onclick="enlargeImg()" id="img">
                            <div class="div-section-div-article-figure-no_div" id="div">
                                <div class="div-section-div-article-figure-div-div" onclick="reduceImg()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16" class="div-section-div-article-figure-div-div-svg">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                    </svg>
                                </div>
                            </div>
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">
                                Adapter niveau dimension au <a class="div-section-div-aside-ul-li-a" href="train_arriere_pour_supercar.php">train arrière pour supercar.</a>
                            </li>
                            <li class="div-section-aside-ul-li">Direction à double pignon.</li>
                            <li class="div-section-aside-ul-li">Frains à disques avec étrier fictif.</li>
                            <li class="div-section-aside-ul-li">Double suspension courte à plat par roue.</li>
                            <li class="div-section-aside-ul-li">Architecture solide (montage en H).</li>
                            <li class="div-section-aside-ul-li">Compatible avec les roues du set lego technic 42143 (Ferrari Daytona SP3).</li>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>'?>
        <?php include 'footer.php';?>
        <?php echo '
        <script type="text/javascript" src="nav.js"></script>
        <script type="text/javascript" src="enlargeImg.js"></script>
        <script type="text/javascript" src="reduceImg.js"></script>
    </body>
</html>'
?>