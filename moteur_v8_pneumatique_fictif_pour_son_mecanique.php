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
                <h2 class="div-section-h2">Moteur v8 pneumatique fictif pour son mécanique</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img" src="v8_pneumatique.webp" alt="Rendu en image" width="1280" height="960" onclick="enlargeImg()" id="img">
                            <div class="div-section-div-article-figure-no_div" id="div">
                                <div class="div-section-div-article-figure-div-div" onclick="reduceImg()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16" class="div-section-div-article-figure-div-div-svg">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                    </svg>
                                </div>
                            </div>
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
        </div>'?>
        <?php include 'footer.php';?>
        <?php echo '
        <script src="nav.js"></script>
        <script src="enlargeImg.js"></script>
        <script src="reduceImg.js"></script>
    </body>
</html>'
?>