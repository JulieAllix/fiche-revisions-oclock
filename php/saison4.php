<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 4 - POO </h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Git : branches</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">Les branches</em> ont un historique de commits séparé</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Commandes git</h3>
                        <ul>
                            <li><em class="gras">origin</em> alias pour pointer vers le repo d'origine</li>
                            <li><em class="gras">git remove-v</em> permet de voir à qui correspndent les alias</li>
                            <li><em class="gras">git pull</em> récupérer les modifs d'un repo sur Github</li>
                            <li><em class="gras">git fetch</em> récupérer les modifs d'un repo sur Github, mais ne permet pas de faire de modifs (n'écrase pas la version précédente en local)</li>
                            <li><em class="gras">git checkout nomDeLaBranche</em> permet de basculer sur une branche</li>
                            <li><em class="gras">git branch</em> montre les branches qui existent (l'étoile indique celle sur laquelle je suis)</li>
                            <li><em class="gras">git merge nomDeLaBranche</em> fusionne la branche avec master</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 

        </section>

        <section id="second-section">

            <article class="topic">

                <h2>POO</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">$this</em> fait référence à l'objet qui a appelé la méthode</li>
                            <li><em class="gras">Une méthode</em> est une fonction à l'intérieur d'une classe</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Balises, propriétés, etc</h3>

                        <ul>
                            <li><em class="gras">class className {}</em> permet de définir une classe</li>
                            <li><em class="gras">public function __construct()</em> est une méthode qui permet d'attribuer automatiquement des valeurs aux paramètres</li>
                            <li><em class="gras">$objet -> propriété</em> permet d'afficher la valeur d'une propriété</li>
                            <li><em class="gras">$objet = new class();</em> permet de créer un objet à partir d'une classe</li>
                            <li><em class="gras">$objet->propriété = valeur;</em> permet d'attribuer une valeur à une propriété</li>
                            <li><em class="gras">$objet->méthode(paramètre);</em> permet d'appeler une méthode sur un objet</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                   
                <h2>Exemples utiles</h2>

                    <h3>Exemple d'utilisation de __construct</h3>

                        <p>public function __construct($name = 'Inconnue', $gender = 'Inconnu', $birthdate = '0000-00-00') {</p>
                        <p>$this->name = $name;</p>
                        <p>$this->gender = $gender;</p>
                        <p>$this->birthdate = $birthdate;</p>
                        <p>}</p>

                    <h3>Exemple d'utilisation d'une fonction dans une classe</h3>

                        <p>public function credit($amount) {</p>
                        <p>$this->balance += $amount;</p>
                        <p>}</p>
                        <p></p>
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