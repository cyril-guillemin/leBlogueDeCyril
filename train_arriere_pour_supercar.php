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
                <h2 class="div-section-h2">Train arrière pour supercar</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <h3 class="div-section-div-article-h3">Rendu en image</h3>
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img" src="img/train_arriere_pour_supercar_2.webp" alt="Rendu en image" width="800" height="600" onclick="enlargeReduceImg()" id="img">
                            <img class="div-section-div-article-figure-noDisplay_img" src="img/train_arriere_pour_supercar_3.webp" alt="Rendu en image" width="1024" height="768" onclick="enlargeReduceImg()" id="enlargeImg">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <p class="div-section-div-aside-p">Description</p>
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Différentiel "maison" à double plateau conique.</li>
                            <li class="div-section-aside-ul-li">
                                Idéale pour y intégrer un moteur en mode 2l (<a class="div-section-div-aside-ul-li-a" href="moteur_v8_pneumatique_fictif_pour_son_mecanique.php">voir moteur v8 pneumatique fictif pour son mécanique</a>).</li>
                            <li class="div-section-aside-ul-li">Frains à disques avec étrier fictif.</li>
                            <li class="div-section-aside-ul-li">Le <a class="div-section-div-aside-ul-li-a" href="train_avant_pour_supercar.php">train avant pour supercar</a> est compatible niveau dimension.</li>
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
        <script src="nav.js"></script>
        <script src="enlargeReduceImg.js"></script>
    </body>
</html>'
?>