<?php
echo '
        <footer class="footer">
            <h3 class="footer-h3">Contact</h3>
            <div class="footer-div">
                <form class="footer-div-form" action="processing.php" method="post">
                    <label class="footer-div-form-label" for="firstName">Prénom</label>
                    <input class="footer-div-form-input" type="text" id="firstName" name="user_firstName" required autocomplete="off">
                    <label class="footer-div-form-label" for="lastName">Nom</label>
                    <input class="footer-div-form-input" type="text" id="lastName" name="user_lastName" required autocomplete="off">
                    <label class="footer-div-form-label" for="email">Email</label>
                    <input class="footer-div-form-input" type="email" id="email" name="user_email" required autocomplete="off">
                    <label class="footer-div-form-label" for="subject">Sujet</label>
                    <input class="footer-div-form-input" type="text" id="subject" name="user_subject" required autocomplete="off">
                    <label class="footer-div-form-label" for="message">Message</label>
                    <textarea class="footer-div-form-textarea" id="message" name="user_message" required autocomplete="off"></textarea>
                    <div class="footer-div-form-div">
                        <button class="footer-div-form-div-button" type="submit">Envoyer</button>
                    </div>
                </form>
                <a class="footer-div-a" href="https://github.com/cyril-guillemin" target="_blank" aria-label="Mon profil GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="footer-div-a-svg" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                </a>
            </div>
        </footer>'
?>