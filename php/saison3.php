<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 3 - Javascript</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic" id="CSS">

                <h2>JS: astuces, fonctions</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>On définit une fonction par <em class="gras">function functionName(paramètre) {}</em></li>
                            <li>On appelle une fonction par <em class="gras">functionName(paramètre)</em></li>
                            <li>Le <em class="gras">camelCase</em> est la convention de nommage la plus en vogue pour les variables JS</li>
                            <li>On déclare une variable par <em class="gras">var variableName = X;</em></li>
                            <li>Le mot-clé <em class="gras">typeof</em> permet de vérifier le type d'une variable (ie. de son contenu)</li>
                            <li>La concaténation s'effectue en js avec l'opérateur <em class="gras">+</em></li>
                            <li><em class="gras">sum(array)</em> permet de faire la somme de tous les éléments d'un array</li>
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

            <article class="topic" id="CSS">

                <h2>Les tableaux</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>Voici un exemple de tableau JS <em class="gras">var fruits = ["cerise", "banane", "kiwi"];</em></li>
                            <li>Voici un exemple de tableau associatif JS <em class="gras">var fruits = {superbon : "cerise", sucre : "banane"};</em></li>
                            <li>En JS, on accède aux éléments d'un objet avec la notation<em class="gras">fruits["key"] ou fruits.key</em></li>
                        </ul>

            </article> 

            <article class="topic" id="CSS">

                <h2>Les événements</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">addEventListener</em> Permet de créer un écouteur d'événement, c'est-à-dire une fonction qui va permettre d'indiquer au navigateur comment réagir à des événements futurs d'un certain type. </li>
                            <p><em class="gras">Exemple</em></p>
                            <p>element.addEventListener(</p>
                            <p>eventType,</p>
                            <p>handler</p>
                            <p>)</p>
                            <aside class="additional-info"><p>element est une référence vers un nœud du DOM, obtenue auparavant;</p></aside>
                            <aside class="additional-info"><p>eventType est une chaîne de caractère décrivant le type d'événement à surveiller, sur element;</p></aside>
                            <aside class="additional-info"><p>handler est une fonction anonyme (function() { … }) ou une référence de fonction (le nom d'une fonction existante).</p></aside>
                            </li>
                            <li><em class="gras">event.preventDefault()</em> permet, lorsque c'est utile, de bloquer le comportement par défaut du navigateur</li>
                            <li><em class="gras">new Event('montype')</em> permet de créer un type d'événement</li>
                            <li>Pour retirer un écouteur d'événement d'un élément HTML, il faut préciser l'élément en question, le type d'événement et le handler, ex: <em class="gras">bouton.removeEventListener('click', cliqueBouton)</em></li>
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
                            <li>La boucle <em class="gras">for (variable in objet)</em> permet de récupérer les clefs d'un tableau</li>
                            <li>La boucle <em class="gras">for (variable of objet)</em> permet de récupérer chaque valeur d'un tableau</li>
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

            <article class="topic" id="general">

                <h2>DOM</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">input.value = "";</em> permet de vider un champ</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Méthodes</h3>

                        <ul>
                            <li><em class="gras">alert()</em> Affiche une pop up avec message + les boutons ok et annuler  </li>
                            <li><em class="gras">prompt()</em> Affiche une pop up / boîte de dialogue qui permet à l'utilisateur de saisir une vale</li>
                            <li><em class="gras">confirm()</em> Affiche une boîte de dialogue qui permet à l'utilisateur de choisir entre annuler et ok</li>
                            <li><em class="gras">setTimeout()</em> Exécute une fonction après un certain temps (en millisecondes)</li>
                            <li><em class="gras">clearTimeout()</em> Annule un timer déclaré par setTimeout</li>
                            <li><em class="gras">setInterval()</em> Exécute une fonction à un certain interval de temps (en millisecondes)</li>
                            <li><em class="gras">clearInterval()</em> Annule un timer déclaré par setInterval</li>
                        </ul>
                    
                    <h3>Propriétés</h3>

                        <ul>
                            <li><em class="gras">.getElementById()</em> Récupération d'un élément du DOM</li>
                            <li><em class="gras">.createElement()</em> Création élément du DOM</li>
                            <li><em class="gras">.querySelector()</em> Permet de récupérer le premier élément correspondant à la syntaxe transmise ( à l'image des selector CSS )</li>
                            <li><em class="gras">.querySelectorAll()</em> Permet de récupérer tous les éléments correspondant à la syntaxe transmise</li>
                            <li><em class="gras">.forEach(function(element){})</em> permet d'appliquer une fonction à tous les éléments correspondants à une variable (qu'on aura notamment pu récupérer via la propriété querySelectorAll())</li>
                            <li><em class="gras">.appendChild()</em> Ajout d'un élément (enfant) à un noeud parent</li>
                            <li><em class="gras">.innerHTML</em> Permet d'ajouter du HTML dans un élément, le code HTML sera interprété</li>
                            <li><em class="gras">.textContent</em> Permet d'ajouter du texte dans un élément</li>
                            <li><em class="gras">.style</em> Permet de modifier l'attribut style d'un élément</li>
                            <li><em class="gras">.classList</em> Retourne la liste des classes (attribut class="...")</li>
                            <li><em class="gras">.value</em> Permet de récupérer le contenu de l'attribut value d'un élément HTML (input par exemple)</li>
                            <li><em class="gras">.id</em> permet d'attribuer un id à un élément</li>
                            <li><em class="gras">.innerText</em> Permet d'ajouter du texte dans un élément</li>
                            <li><em class="gras">.onclick</em> Permet de lancer une action au moment où l'utilisateur clique sur un bouton. Si cette action est le lancement d'une fonction, on donne le nom de la fonction sans parenthèses</li>
                            <li><em class="gras">.target</em> Permet de sélectionner la cible d'un event</li>
                            <li><em class="gras">.className</em> Remplace les classes déjà existantes</li>
                            <li><em class="gras">.classList</em> Permet de gérer une liste de classes</li>
                            <li><em class="gras">.classList.add</em> Permet d'ajouter une classe</li>
                            <li><em class="gras">.classList.remove</em> Permet de retirer une classe</li>
                            <li><em class="gras">.focus()</em> Applique le focus sur un élément HTML</li>
                            <li><em class="gras">.blur()</em> Retire le focus d'un élément HTML</li>
                        </ul>
    
                </article>

                <article class="topic" id="general">

                    <h2>Les cookies & sessions (PHP)</h2>

                        <h3>Les cookies</h3>

                            <ul>
                                <li>Dans l'onglet "<em class="gras">Applications</em>" du panneau pour développeur de Chrome (inspecteur d'éléments), on peut voir les cookies stockés pour chaque domaine.</li>
                                <li><em class="gras">if(array_key_exists($userName, $users)</em> permet de checker si $userName existe dans l'array $users</li>
                                <li><em class="gras">password_verify(($password, $encryptedPassword))</em> permet de vérifier si $password correspond à $encryptedPassword (en hachant $password, qui n'est pas encore haché contrairement à $encryptedPassword)</li>
                                <li><em class="gras"></em></li>
                                <li><em class="gras"></em></li>
                                <li><em class="gras"></em></li>
                                <li><em class="gras"></em></li>
                            </ul>

                        <h3>Les sessions</h3>

                            <ul>
                                <li><em class="gras">session_start();</em> permet d'activer les sessions
                                <aside class="additional-info"><p>Afin d'éviter des conflits en cas de session déjà ouverte, on s'assurera que session_id() est bien vide, via empty(session_id()) ou équivalent, une session non démarrée entrainant session_id = "" (chaine vide.</p></aside></li>
                                <li><em class="gras">session_start()</em> génère un ID complexe (ou le récupère depuis les cookies), puis il génère un fichier qui porte ce nom, et dont le contenu sera accessible avec la globale $_SESSION</li>
                                <li>La globale <em class="gras">$_SESSION</em> est un tableau dans lequel on va pouvoir stocker puis accéder à des informations.</li>
                                <li>On peut supprimer les données stockées dans $_SESSION avec la fonction <em class="gras">session_unset</em></li>
                                <li><em class="gras">unset($_SESSION['userName'])</em> permet de supprimer l'entrée 'username' de l'array</li>
                                <li><em class="gras">password_hash()</em> crée un hachage</li>
                                <li><em class="gras">$_SESSION['username'] = $username;</em> permet de stocker le nom d'utilisateur dans la session courante</li>
                                <li><em class="gras"></em></li>
                            </ul>
    


</article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>