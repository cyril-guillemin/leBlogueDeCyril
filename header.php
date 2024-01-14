<?php
echo '
        <header class="header">
            <div class="header-div">
                <a class="header-div-a" href="index.php">
                    <h1 class="header-div-a-h1">Le blogue de Cyril</h1>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="header-div-svg" viewBox="0 0 16 16" onclick="displayNav()">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </div>
            <nav class="header-no_nav" id="nav">
                <div class="header-nav-div">
                    <p class="header-nav-div-p">Mécanique (Brique de construction technique)</p>
                    <ul class="header-nav-div-ul">
                        <li class="header-nav-div-ul-li">
                            <a class="header-nav-div-ul-li-a" href="train_arriere_pour_supercar.php">Train arrière pour supercar</a>
                        </li>
                        <li class="header-nav-div-ul-li">
                            <a class="header-nav-div-ul-li-a" href="train_avant_pour_supercar.php">Train avant pour supercar</a>
                        </li>
                        <li class="header-nav-div-ul-li">
                            <a class="header-nav-div-ul-li-a" href="moteur_v8_pneumatique.php">Moteur V8 pneumatique</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>'
?>