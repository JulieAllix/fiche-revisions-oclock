<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison  - </h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Good to know, rappels</h2>

                    <h3>En vrac</h3>

                        <ul>
                            <li><em class="gras">Babel</em> permet de rendre un code rétro-compatible</li>
                            <li>L'instruction<em class="gras">debugger</em> permet de débugger en pas à pas (aller dans Inspecter/Sources sur Chrome)</li>
                            <li>Les <em class="gras">littéraux de gabarit (``)</em> permettent de sauter des lignes et d'interpréter directement du js encadré dans <em class="gras">${}</em></li>
                            <li>Ecrire directement une condition renvoie un booléen, ex: <em class="gras">36 < 50 renverra true</em></li>
                            <li>Attention ! Selon la fonction qu'on utilise pour récupérer un élément du DOM, <em class="gras">le type de ce qu'on récupère peut être différent</em>. Penser à toujours faire des console.log.</li>
                            <li><em class="gras">array.from()</em> permet de convertir un type qui ressemble à un array en array</li>
                            <li><em class="gras">document.querySelectorAll</em> permet de sélectionner tous les éléments d'un querySelector donné</li>
                            <li><em class="gras">element.style.display</em> permet de jouer sur l'affichage d'un élément (de none à block par ex)</li>
                            <li><em class="gras">setTimeout(function () { do sthg }, 1000)</em> permet de déclancher des actions au bout d'une seconde</li>
                        </ul>

                    <h3>Les types de variables</h3>

                        <ul>                            
                            <li>Taper <em class="gras">window.variableName</em> dans la console permet d'afficher la valeur stockée dans la variable</li>
                            <li><em class="gras">var</em> permet de définir une variable "locale à la fonction". La variable sera globale si elle n'est pas définie dans une fonction.</li>
                            <li>Une <em class="gras">variable globale</em> peut poser problème avec le caractère asynchrone de js. Pour éviter ça, on peut déclarer nos variables avec <em class="gras">Let</em>.</li>
                            <li><em class="gras">let</em> définit une variable "locale au bloc", par exemple elle peut ne s'appliquer qu'à une boucle</li>
                            <li><em class="gras">const</em> est local au bloc mais on ne peut pas modifier sa valeur</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Les boucles</h3>

                        <ul>
                            <li>Pour utiliser une boucle <em class="gras">forEach</em>, on fait <em class="gras">nomDuTableau.forEach(nomDeLaFonction)</em></li>
                            <li>Ou bien <em class="gras">nomDuTableau.forEach(function(valeur courante, index, tableau ...){})</em></li>
                            <li><em class="gras">forEach</em> sert à exécuter du code pour chaque item d'un tableau</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Les fonctions</h3>

                        <ul>
                            <li>Dans une <em class="gras">fonction fléchée</em>, il vaut mieux utiliser des parenthèses pour encadrer le contenu de la fonction quand on veut retourner un objet (avec {})</li>
                            
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
            </article> 

            <article class="topic">

                <h2>Méthodes utiles</h2>

                    <h3>Map</h3>

                        <ul>
                            <li>La méthode <em class="gras">nomDuTableau.map()</em> crée un tableau avec les résultats de l'appel d'une fonction sur chaque élément du tableau.</li>
                            <li>Elle crée un nouveau tableau et autant d'items à la sortie qu'au départ</li>
                            <li><em class="gras">map</em> sert à transposer des éléments</li>
                            <li><em class="gras">return { x, y }</em> permet de créer un tableau contenant les propriétés x et y pour chaque élément du tableau d'origine</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Filter</h3>

                        <ul>
                            <li>La méthode <em class="gras">nomDuTableau.filter()</em> crée et retourne un tableau contenant tous les éléments du tableau d'origine qui remplissent une condition prédéfinie</li>
                        </ul>

                    <h3>Find</h3>

                        <ul>
                            <li>La méthode <em class="gras">nomDuTableau.find()</em> renvoie la valeur du premier élément trouvé dans le tableau</li>
                        </ul>

                    <h3>Eclatement de tableau</h3>

                        <ul>
                            <li>On peut éclater un tableau imbriqué en créant des variables, par ex <em class="gras">const [canard, chat, lion, mouton] = animaux</em> renvoie quatre tableaux contenant les données de chaque animal (voir ex6 episode 1)</li>
                            <li>Pour un array donné, on peut ne récupérer que les clefs qui nous intéressent et les créer sous forme de variables avec la syntaxe suivante: <em class="gras">const { firstName, login } = user;</em></li>
                            <li>On peut renommer la clef avec ':', ex :<em class="gras">const { firstName: name, login } = user;</em></li>
                            <li><em class="gras">[] -> tableau // {} objet</em></li>
                            <li>On peut aussi destructurer un objet <em class="gras">dans les paramètres</em> d'une fonction, ex: </li>
                            <li><em class="gras">function sayHelloToUser({ firstName, lastName}) {</em></li>
                            <li><em class="gras">console.log(`Hello ${firstName} ${lastName}`);</em></li>
                            <li><em class="gras">}</em></li>
                            <li><em class="gras">sayHelloToUser(user);</em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Le currying</h3>

                        <ul>
                            <li>Le <em class="gras">currying</em> consiste en le fait de préparer une fonction qui va renvoyer une nouvelle fonction préparée</li>
                            <li>Pour cela, on va stocker dans une variable un appel à une autre fonction<em class="gras"></em></li>
                            <li>Pour plus de détails, voir ex9 episode 2 (parcours)<em class="gras"></em></li>
                        </ul>
                    
            </article>


        
        </section>

        <section id="second-section">

            <article class="topic">

                <h2>Manipulation du DOM</h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras">input.autocomplete = 'off'</em> permet de ne pas avoir d'auto-completion</li>
                            <li>On peut rapidement ajouter un type, id, name, placeholder etc à un input en faisant <em class="gras">input.type = 'blabla', input.id etc</em></li>
                            <li><em class="gras">app.variable (ou app.element)</em> permet d'accéder à une variable/élément dispo dans tout app (qui aura été définie à la racine de app)</li>
                            <li>On peut passer un <em class="gras">objet de données</em> en paramètre quand on appelle une fonction</li>
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