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
            $email = stripslashes(trim($_POST["user_email"]));
            $subject = stripslashes(trim($_POST["user_subject"]));
            $message = stripslashes(trim($_POST["user_message"]));
            $to = "message@lebloguedecyril.fr";

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(mail($to, $subject, $message, $email)) {
                    echo '
                    <div class="div">
                        <section class="div-section">
                            <h2 class="div-section-h2">Bonjour ' . $firstName . ' ' . $lastName . ' !</h2>
                            <p class="div-section-p">Merci à l\'attention que vous portez pour mon blogue !!!</p>
                            <p class="div-section-noProblem_p">
                                Votre message à bien été envoyé ! &#128540;
                            </p>
                        </section>
                    </div>';
                }
                else {
                    /* Sinon c'est que le pb provient de la variable $to */
                    echo '
                        <div class="div">
                            <section class="div-section">
                                <h2 class="div-section-h2">Bonjour ' . $firstName . ' ' . $lastName . ' !</h2>
                                <p class="div-section-p">Merci à l\'attention que vous portez pour mon blogue !!!</p>
                                <p class="div-section-problem_p">
                                    Un problème est survenu, veuillez réessayer plus tard.
                                </p>
                            </section>
                        </div>';
                }
            } 
            else {
                echo '
                <div class="div">
                    <section class="div-section">
                        <h2 class="div-section-h2">Bonjour !</h2>
                        <p class="div-section-p">Merci à l\'attention que vous portez pour mon blogue !!!</p>
                        <p class="div-section-problem_p">
                            Vous devez entrez un email valide (ne pas oublié l\'arobase et le .com ou .fr ect. , le tout en minuscule).
                        </p>
                    </section>
                </div>';
            }

        }
        else {
            echo '
                <div class="div">
                    <section class="div-section">
                        <h2 class="div-section-h2">Bonjour !</h2>
                        <p class="div-section-p">Merci à l\'attention que vous portez pour mon blogue !!!</p>
                        <p class="div-section-problem_p">
                            Tout les champs de formulaire doivent être renseigner.
                        </p>
                    </section>
                </div>';
        }
        ?>
        <?php include 'footer.php';?>
        <?php echo '
        <script src="nav.js"></script>
    </body>
</html>'
?>