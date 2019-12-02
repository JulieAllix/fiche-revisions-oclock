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

            <article class="topic">

                <h2>Composer</h2>

                    <h3>Les packages/dépendances</h3>

                        <ul>
                            <li>Les packages s'installent à la racine de notre repo</li>
                            <li>Quand on a un projet avec un composer.json, toujours faire un <em class="gras">composer install</em> dans le terminal pour récupérer les dépendances</li>
                            <li><em class="gras">composer update</em> permet de faire des màj dans le repo</li>
                            <li></li>
                            <li></li>
                            <li><em class="gras">symfony/var_dumper</em> permet d'afficher les var_dump de façon + clean. On utilise le raccourci dump.</li>
                            <li><em class="gras">altorouter</em> permet d'aller chercher des paramètres d'url dynamiques</li>
                            <li><em class="gras">$router->setBasePath($_SERVER['BASE_URI']);</em> sert à indiquer où se trouve la racine de mon site. Il faut le placer dans l'index, en général.</li>
                            <li><em class="gras">$router->map(méthode, url, data, id de route)</em> permet d'ajouter une route</li>
                            <li>par ex : $router->map('GET', '/', 'render-home', 'home')</li>
                            <li><em class="gras">$match = $router->match();</em> permet de vérifier s'il y a une route correspondant à la page demandée</li>
                            <li><em class="gras">vendor/autoload.php</em> permet de charger toutes les dépendances. Il faut donc le require pour les charger dans un fichier donné.</li>
                            
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
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
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                   
                    <h3></h3>
                        <p></p>
                        <p></p>
                    
            </article>

            <article class="topic">

                <h2>PHP</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Le fichier point d'entrée est appelé <em class="gras"></em>Front Controller</li>
                            <li>On crée un fichier par classe (bonne pratique)</li>
                            <li>On met une majuscule au nom des fichiers qui contiennent une classe</li>
                            <li></li>
                            <li></li>
                        </ul>
                    
                    <h3>Architecture MVC : Model - View - Controller</h3>

                        <ul>
                            <li><em class="gras">Model</em>: c'est une couche qui correspond à l'ensemble des classes définissant les objets manipulés par l'application, qui contiennent les données et réalisent les opérations de stockage. Le Model protège l'intégrité des données en implémentant la logique métier et s'occupe du stockage.</li>
                            <li><em class="gras">Controller</em>: gère l'aspect dynamique de l'application. A partir de la requête utilisateur, il récupère les données grâce au Model, les injecte dans la View correspondante, et envoie la réponse produite.</li>
                            <li><em class="gras">Dispatcher</em>: instancie le Controller et exécute l'action.</li>
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

            <article class="topic">

                <h2>SQL</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Pour sélectionner les title d'une table post, on fera <em class="gras">post.title</em></li>
                            <li>Pour découper le content d'une table post (en ne gardant que les 10 premiers caractères par ex), on fera <em class="gras">SUBSTRING(post.content, 1, 50)</em></li>
                            <li><em class="gras">CONCAT(x,y)</em> permet de concaténer x et y</li>
                            <li><em class="gras">NOT IN(x,y)</em> permet d'exclure x et y</li>
                            <li><em class="gras">JOIN</em> ajoute des colonnes provenant d'autres tables</li>
                            <li><em class="gras">JOIN author ON post.author_id = author.id</em> fait un filtre sur author id et supprime les autres combinaisons</li>
                            <li></li>
                            <li></li>
                        </ul>
                    
                    <h3></h3>

                        <ul>
  
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

    </main>

<?php require 'partials/footer.php'; ?>