<?php echo '
<!doctype html>
<html lang="fr">'
?>
    <?php include 'head.php';?>
    <?php echo '
    <body>'?>
        <?php include 'header.php';?>
        <?php
        if(isset($_POST["user_firstName"]) && isset($_POST["user_lastName"]) && isset($_POST["user_subject"]) && isset($_POST["user_message"]) && isset($_POST["user_email"])) {
            $firstName = stripslashes(trim($_POST["user_firstName"]));
            $lastName = stripslashes(trim($_POST["user_lastName"]));
            $subject = stripslashes(trim($_POST["user_subject"]));
            $message = stripslashes(trim($_POST["user_message"]));
            $headers .= stripslashes(trim($_POST["user_email"]));
            $to = "message@lebloguedecyril.fr";

            if(mail($to, $subject, $message, $headers)) {
                echo '
                <div class="div">
                    <section class="div-section">
                        <h2 class="div-section-h2">Bonjour ' . $firstName . ' ' . $lastName . ' !</h2>
                        <p class="div-section-p">
                            Votre message à bien été envoyé &#128540;
                        </p>
                    </section>
                </div>';
            }
        }
        else {
            echo 'Tout les champs du formlaire sont requis';
        }
        ?>
        <?php include 'footer.php';?>
        <?php echo '
        <script src="nav.js"></script>
    </body>
</html>'
?>