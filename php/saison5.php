<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 5</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Git</h2>

                    <h3>Pull request : procédure</h3>

                        <ul>
                            <li>Créer une branche, se placer dessus et coder dedans</li>
                            <li>Pusher la branche sur Github sans merger avec la branche principale</li>
                            <li>Aller sur la page du dépôt, cliquer sur <em class="gras">New pull request</em></li>
                            <li>Ecrire le titre de la PR et la description de ce qu'elle contient, puis sélectionner les reviewers</li>
                            <li>Après validation, merger la branche avec la principale</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Good to know</h3>

                        <ul>
                            <li><em class="gras">Git diff</em> permet de voir la différence entre ce qui était dans le dernier commit et ce qui a été modifié/ajouté</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 


        
        </section>

        <section id="second-section">

            <article class="topic">

                <h2>Apache et .htaccess</h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras">.htaccess</em> donne des instructions/directives à Apache</li>
                            <li><em class="gras">Deny from all</em> : tous les fichiers du répertoire et les sous-dossiers sont interdits</li>
                            <li><em class="gras">$_GET['_url']</em> permet de récupérer l'information sur la page demandée suite à la mise en place du htaccess de redirection</li>
                        </ul>

                   
                    <h3></h3>
                        <p></p>
                        <p></p>
                    
            </article>

            <article class="topic">

                <h2></h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
    
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>