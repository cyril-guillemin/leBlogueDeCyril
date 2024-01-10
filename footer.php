<?php
echo '
        <footer class="footer">
            <h3 class="footer-h3">Contact</h3>
            <form class="footer-form" action="processing.php" method="post">

                <label class="footer-form-label" for="firstName">Prénom</label>
                <input class="footer-form-input" type="text" id="firstName" name="user_firstName" required autocomplete="off">

                <label class="footer-form-label" for="lastName">Nom</label>
                <input class="footer-form-input" type="text" id="lastName" name="user_lastName" required autocomplete="off">

                <label class="footer-form-label" for="email">Email</label>
                <input class="footer-form-input" type="email" id="email" name="user_email" required autocomplete="off">

                <label class="footer-form-label" for="subject">Sujet</label>
                <input class="footer-form-input" type="text" id="subject" name="user_subject" required autocomplete="off">

                <label class="footer-form-label" for="message">Message</label>
                <textarea class="footer-form-textarea" id="message" name="user_message" required autocomplete="off"></textarea>

                <div class="footer-form-div">
                    <button class="footer-form-div-button" type="submit">Envoyer</button>
                </div>
            </form>
        </footer>'
?>