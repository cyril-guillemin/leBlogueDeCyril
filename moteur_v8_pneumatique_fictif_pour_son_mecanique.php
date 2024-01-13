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
                            <img class="div-section-div-article-figure-img" src="img/v8_pneumatique_2.webp" alt="Rendu en image" width="800" height="600" onclick="enlargeReduceImg()" id="img">
                            <img class="div-section-div-article-figure-noDisplay_img" src="img/v8_pneumatique_3.webp" alt="Rendu en image" width="1024" height="768" onclick="enlargeReduceImg()" id="enlargeImg">
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
        <script src="enlargeReduceImg.js"></script>
    </body>
</html>'
?>