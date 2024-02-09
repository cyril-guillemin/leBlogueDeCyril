<?php
header("Cache-Control: max-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="img/maPhoto.webp" type="image/webp">  
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Qui suis-je ?</h2>
                <div class="div-section-div">
                    <article class="div-section-div-article">
                        <figure class="div-section-div-article-figure">
                            <img class="div-section-div-article-figure-img" fetchpriority="high" src="img/maPhoto.webp" alt="Rendu en image" width="300" height="300">
                        </figure>
                    </article>
                    <aside class="div-section-div-aside">
                        <ul class="div-section-div-aside-ul">
                            <li class="div-section-aside-ul-li">Un passioné de sciences et techniques.</li>
                            <li class="div-section-aside-ul-li">Ancien diplomé à bac +3 de l\'INSSET en ingénierie industrielle. Cette formation à été découpé sur deux ans de prépa (groupe Polyméca).</li>
                            <li class="div-section-aside-ul-li">Cela c\'est donc suivit d\'une licence sciences pour l\'ingénieur parcours ingénierie industrielle.</li>
                            <li class="div-section-aside-ul-li">Sur les 2 ans de prépa j\'ai étudier les mathématiques et l\'informatique sur un temps moyen, la physique en majeur et la chimie en mineur ainsi que les sciences et technologies industrielles sur un temps moyen.</li>
                            <li class="div-section-aside-ul-li">En licence, j\'ai axé ma formation en mécanique orienté énergétique puis électronique électrotechnique et automatique.</li>
                            <li class="div-section-aside-ul-li">Aujourd\'hui je souhaite me spécialiser en calcul scientifique.</li>
                        </ul>
                    </aside>
                </div>
            </section>
        </div>';?>
        <?php include 'footer.php';?>
        <?php echo '
        <script>
            window.onload = console.log("La page c\'est correctement chargée !");
        </script>
    </body>
</html>';?>