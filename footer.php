<?php
echo '
        <footer class="footer">
            <h3 class="footer-h3">Contact</h3>
            <form class="footer-form" action="processing.php" method="post">
                <label class="footer-form-label" for="email">Email</label>
                <input class="footer-form-input" type="email" id="email" name="user_email" autocomplete="off">

                <label class="footer-form-label" for="subject">Sujet</label>
                <input class="footer-form-input" type="text" id="subject" name="user_subject" autocomplete="off">

                <label class="footer-form-label" for="message">Message</label>
                <textarea class="footer-form-textarea" id="message" name="user_message" autocomplete="off"></textarea>

                <div class="footer-form-div">
                    <button class="footer-form-div-button" type="submit">Envoyer</button>
                </div>
            </form>
        </footer>'
?>