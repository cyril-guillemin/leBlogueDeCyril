<?php
header("Cache-Control: min-age=31536000, public");
echo '
<!doctype html>
<html lang="fr">';?>
    <?php include 'head.php';
    echo '
        <link rel="preload" fetchpriority="high" as="image" href="#" type="image/webp">
    </head>
    <body>';?>
        <?php include 'header.php';?>
        <?php echo '
        <div class="div">
            <section class="div-section">
                <h2 class="div-section-h2">Méthodes numérique</h2>
                <div class="div-section-div">
                    <figure class="div-section-div-figure">
                        <img class="div-section-div-figure-img" fetchpriority="high" src="#" alt="#" width="300" height="300">
                        <figcaption class="div-section-div-figure-figcaption">
                            <p class="div-section-div-figure-figcaption-p">Interpolation et approximation</p>
                        </figcaption>
                    </figure>
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