<?php include 'partials/head.php'; ?>

<body>

<?php include 'partials/logo.php'; ?>

    <header>

    <h1>Fiche de révisions : Saison 3 - Javascript</h1>
    <?php include 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic" id="CSS">

                <h2>JS: astuces, fonctions</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>On définit une fonction par <em class="gras">function functionName(paramètre) {}</em></li>
                            <li>Le <em class="gras">camelCase</em> est la convention de nommage la plus en vogue pour les variables JS</li>
                            <li>On déclare une variable par <em class="gras">var variableName = X;</em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Fonctions</h3>

                        <ul>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 

            <article class="topic" id="CSS">

                <h2>Les tableaux</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>Voici un exemple de tableau JS <em class="gras">var fruits = ["cerise", "banane", "kiwi"];</em></li>
                        </ul>

            </article> 

            <article class="topic" id="CSS">

                <h2>Les fonctions</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Fonctions utiles</h3>

                        <ul>
                            <li><em class="gras">alert(message)</em> affiche une pop-up avec un message et un bouton OK </li>
                            <li><em class="gras">prompt()</em> affiche une pop-up / boîte de dialogue permettant à l'utilisateur de saisir une valeur, avec un bouton OK pour valider, et possibliité d'Annuler</li>
                            <li><em class="gras">confirm()</em> affiche une boîte de dialogue permettant à l'utilisateur de choisir entre Annuler et OK</li>
                            <li><em class="gras">console.log()</em> affiche un message dans la console</li>
                            <li><em class="gras">console.info()</em> alias de console.log()</li>
                            <li><em class="gras">console.warn()</em> affiche un message d'avertissement (jaune avec icône) dans la console</li>
                            <li><em class="gras">console.error()</em> affiche un message d'erreur (rouge avec icône d'erreur) dans la console</li>
                            <li><em class="gras">Number(string)</em> transforme une chaîne de caractère en nombre</li>
                            <li><em class="gras">parseInt(string)</em> ransforme une chaîne de caractère en nombre (comme Number()), mais en plus, est capable de rechercher les chiffres en début de texte pour les transformer en nombre (ex : parseInt('3 pommes') => 3)</li>
                            <li><em class="gras">.length</em> Permet de recupérer la longueur d'une chaîne de caractères, ou le nb d'éléments d'un tableau</li>
                            <li><em class="gras">.indexOf()</em> Permet de récupérer le premier index d'un élément dans une chaîne de caractères + Permet de recupérer l'index de la position de la première occurence d'un élément dans un tableau</li>
                            <li><em class="gras">.lastIndexOf()</em> Permet de récupérer l'index de la position de la dernière occurence d'un élément dans une chaîne de caractères</li>
                            <li><em class="gras">Math.random()</em> génère un nombre aléatoire entre 0 et 1</li>
                            <li><em class="gras">Math.round()</em> arrondit un nombre à l'entier le plus proche</li>
                            <li><em class="gras">Math.floor()</em> arrondit un nombre à l'entier inférieur</li>
                            <li><em class="gras">Math.ceil()</em> arrondit un nombre à l'entier supérieur</li>
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

            <article class="topic" id="general">

                <h2>Les boucles</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>Il est possible d'interrompre une boucle avec l'instruction <em class="gras">break;</em></li>
                            <li>Il est possible d'interrompre l'itération courante et de passer à la suivante avec l'instruction <em class="gras">continue;</em></li>
                        </ul>

                    <h3>Exemple de boucle while</h3>
                        <p>while(condition) {</p>
                        <p>// ... instructions</p>
                        <p>}</p>
                    <h3>Exemple de boucle do...while</h3>
                        <p>do {</p>
                        <p>// ... instructions</p>
                        <p>} while(condition)</p>
                    <h3>Exemple de boucle for</h3>
                        <p>for(var i = 0; i < 3; i++) {</p>
                        <p>// ... instructions</p>
                        <p>}</p>
                    <h3>Exemple de boucle for...in</h3>
                        <p>var fruit = {</p>
                        <p>nom: 'fraise',</p>
                        <p>couleur: 'rouge'</p>
                        <p>};</p>
                        <p>for(var propriete in fruit) {</p>
                        <p>console.log('Propriété ' + propriete + ' :');</p>
                        <p>console.log('Le fruit est ' + fruit[propriete]);</p>
                        <p>}</p>
                    
            </article>

        </section>

    </main>

<?php include 'partials/footer.php'; ?>