<?php
    session_start();
    include_once("./src/connect_bdd.inc.php");
?>
<?php 
    include_once "./src/head.inc.php"
?>
<body>
    <header>
        <a href="./inscription.php"><img class="logo" src="./asset/gmail_logo.png" alt="logo"></a>
        <nav class="nav_btns" id="nav-btns">
            <ul class="nav_links">
                <li><a class="link" href="#forpros">POUR LES PROS</a></li>
                <li><a class="link" href="./connexion.php">CONNEXION</a></li>
                <li><a class="active-link" href="#create_acc">CRÉER UN COMPTE</a></li>
            </ul>
            <div class="nav_btns">
                <!-- Theme change button -->
                <i class="fa-solid fa-moon change-theme" tabindex=0 aria-hidden="true" id="theme-button"></i>
            </div>
        </nav>
    </header>
    <main>
        <section id="home_page">
            <h1>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils</h1>
            <a href="#create_acc" class="button1">CRÉER UN COMPTE</a>
        </section>
        <section id="create_acc">

            <div>
                <h2>Une boîte de réception entièrement repensée</h2>
                <p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.</p>
            </div>

            
                <fieldset class="formulaire">
                    <legend>
                        Créer un compte
                    </legend>
                    <form action="" method="post">
    
                    <label for="user-lastname">Nom *</label><br>
                    <input type="text" id="lastname" name="nom" placeholder="Nom" aria-required="true" required><br>
                    
                    <label for="user-firstname">Prénom *</label><br>
                    <input type="text" id="name" name="prénom" placeholder="Prénom" aria-required="true" required><br>
    
                    <label for="email">E-mail *</label><br>
                    <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true" required><br>
    
                    <label for="email">Mot de passe *</label><br>
                    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true" required> <br>
                    
                    <div class="button2">
                        <input type="submit" name="submit" value="VALIDER VOTRE COMPTE">
                    </div>
                    
    
                    </form>
                </fieldset>
                <?php
            //inclusion
            include_once "./src/traitement.inc.php";
            ?>
        </section>
    </main>
    <footer>
    <p>© Andy Louis - All Rights Reserved for Educational Pruposes Only</p>
    </footer>
    <a href="#create_acc" class="scroll_down">
        <i class="fa-solid fa-chevron-down scrollup_icon" title="Icône Scroll-Down"></i>
    </a>
    <script src="./js/app.js"></script>
</body>
</html>