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
                            <li>L'instruction <em class="gras">debugger</em> permet de débugger en pas à pas (aller dans Inspecter/Sources sur Chrome)</li>
                            <li>Les <em class="gras">littéraux de gabarit (``)</em> permettent de sauter des lignes et d'interpréter directement du js encadré dans <em class="gras">${}</em></li>
                            <li>Ecrire directement une condition renvoie un booléen, ex: <em class="gras">36 < 50 renverra true</em></li>
                            <li>Attention ! Selon la fonction qu'on utilise pour récupérer un élément du DOM, <em class="gras">le type de ce qu'on récupère peut être différent</em>. Penser à toujours faire des console.log.</li>
                            <li><em class="gras">array.from()</em> permet de convertir un type qui ressemble à un array en array</li>
                            <li><em class="gras">document.querySelectorAll</em> permet de sélectionner tous les éléments d'un querySelector donné</li>
                            <li><em class="gras">element.style.display</em> permet de jouer sur l'affichage d'un élément (de none à block par ex)</li>
                            <li><em class="gras">setTimeout(function () { do sthg }, 1000)</em> permet de déclancher des actions au bout d'une seconde</li>
                            <li>Pour les tableaux et les objets, quand on fait <em class="gras">variable2 = variable1</em>, si on fait une modif à variable2, elle s'applique à variable1 : on a fait une copie du pointeur (stockage par référence)</li>
                            <li><em class="gras">::before</em> avec un content:'' permet par exemple d'ajouter un élément de déco avant un autre élément</li>
                            <li><em class="gras"></em></li>
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

            <article class="topic">

                <h2>Manipulation du DOM</h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras">input.autocomplete = 'off'</em> permet de ne pas avoir d'auto-completion</li>
                            <li>On peut rapidement ajouter un type, id, name, placeholder etc à un input en faisant <em class="gras">input.type = 'blabla', input.id etc</em></li>
                            <li><em class="gras">app.variable (ou app.element)</em> permet d'accéder à une variable/élément dispo dans tout app (qui aura été définie à la racine de app)</li>
                            <li>On peut passer un <em class="gras">objet de données</em> en paramètre quand on appelle une fonction</li>
                        </ul>
    
            </article>

            <article class="topic">

                <h2>NPM</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li><em class="gras">yarn</em> est une version améliorée de npm (+ rapide, + secure, +joli)</li>
                            <li><em class="gras">npm (node package manager)</em> est l'équivalent de composer pour js</li>
                            <li><em class="gras">Webpack</em> est un outil de build. Il modularise (crée un module pour chaque fichier js utilisé dans le dossier src du projet), transpile (transforme du code en faisant appel à des outils, type Babel) et compresse notre code. Il gère tous les assets (js, styles, img, etc)</li>
                            <li><em class="gras">Babel</em> rend compatible du code toute nouvelle génération vers du code plus ancien. Il convertit égaleemnt le JSx (langage de React) en Js</li>
                            <li><em class="gras">ESLint</em> analyse le code, fournit des conseils, etc</li>
                            <li><em class="gras">node_modules</em> est un équivalent du dossier vendor de composer. Il faut le mettre en git ignore.</li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Commandes utiles</h3>

                        <ul>
                            <li><em class="gras">npm init</em> crée un fichier package.json</li>
                            <li><em class="gras">npm install react</em> installe le package nommé "react" dans package.json</li>
                            <li><em class="gras">npm uninstall react</em></li>
                            <li><em class="gras">npm install react --save</em> installe react et le rajoute aux dépendances dans package.json</li>
                            <li><em class="gras">npm install webpack --save-dev</em> installe le webpack et le rajoute aux dépendances de dev dans package.json</li>
                            <li><em class="gras">yarn</em> est la première commande à faire sur un projet React</li>
                            <li><em class="gras">yarn build</em> optimise le code pour la prod</li>
                            <li><em class="gras">yarn start</em> lance le serveur</li>
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

                <h2>Découverte de React</h2>
                
                    <h3>Démarrer un projet</h3>

                        <ul>
                            <li>Une fois avoir installé le modèle React dans notre arborescence de fichiers, il reste deux commandes à faire pour installer React sur un nouveau projet.<em class="gras"></em></li>
                            <li>Dans le cas où le modèle aura été placé dans un dossier 'spé-react', et que le projet aura été placé dans spé-react/eX, les commandes à faire au niveau du projet sont :<em class="gras"></em></li>
                            <li><em class="gras">cp -n ../../React-modele/{.*,*} .</em></li>
                            <li><em class="gras">cp -rn ../../React-modele/{src,config,public} .</em></li>
                            <li><em class="gras">yarn</em></li>
                            <li><em class="gras">yarn build</em> (facultatif)</li>
                            <li><em class="gras">yarn start</em></li>
                            <li>Un <em class="gras">composant</em> est une fonction qui retourne du JSx (js qui ressemble à du html)</li>
                            <li>Dans les itérations, l'élément qui subit l'itération doit recevoir une prop spéciale : <em class="gras">key={...}</em> qui doit contenir qch d'unique entre les différents éléments qui subissent la boucle</li>
                            <li><em class="gras">yarn add prop-types</em> permet d'utiliser les prop-types</li>
                        </ul>

                    <h3>Export/import</h3>

                        <ul>
                            <li>On peut faire des exports par défaut avec <em class="gras">export default functionName;</em></li>
                            <li>On les importe avec <em class="gras">import leNomQueJeVeux from './fichierdOrigine.js';</em></li>
                            <li>On peut faire des exports nommés avec <em class="gras">export const coucou = () => 'coucou';</em> ou encore <em class="gras"> export { coucou, salut };</em></li>
                            <li>On les importe avec <em class="gras">import { coucou, salut } from './hello.js';</em></li>
                            <li>On importe tout avec <em class="gras">import hello, { coucou, salut } from './hello';</em></li>
                            <li><em class="gras">import React from 'react';</em> et <em class="gras">import { render } from 'react-dom';</em> permettent d'appliquer au DOM le DOM de React</li>
                            <li>Quand on utilise des props, il faut penser à faire un <em class="gras">import PropTypes from 'prop-types';</em> dans l'index.js de notre composant pour s'assurer que nos props aient bien le bon type de données</li>
                            <li>Puis il faut faire, par exemple, un <em class="gras">Composant.proptypes = {</em></li>
                            <li><em class="gras">propertyName: PropTypes.string.isRequired,</em></li>
                            <li><em class="gras">}</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li></li>
                        </ul>

                    <h3>CSS : styled components</h3>

                        <ul>
                            <li><em class="gras">yarn add styled-components</em> permet d'installer styled components</li>
                            <li><em class="gras">import styled from 'styled-components';</em> permet d'importer styled-components dans l'index.js racine ainsi que dans les fichiers ComposantStyled.js</li>
                            <li>On peut créer nos variables styled components dans <em class="gras">src/styles/theme</em></li>
                            <li>Les fichiers <em class="gras">ComposantStyled.js</em> permettent de définir le style du composant qui sera placé lui-même dans un composant. On peut réutiliser les variables définies dans theme.</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Props & Selectors</h3>

                        <ul>
                            <li><em class="gras">{...post}</em> est un exemple de spread operator: il déverse le contenu de l'objet contenu en posts dans post (voir correction du challenge e4 rangé en e5)</li>
                            <li>On peut créer des fonctions dans des fichiers qu'on rangera dans <em class="gras">src/selectors/</em></li>
                            <li>On les importe avec un <em class="gras">import { nomDeLaFonction } from 'src/selectors/posts';</em></li>
                            <li>Puis on les appelle comme une fonction classique<em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul> 

            </article>

            <article class="topic">

                <h2>Use & Axios</h2>

                    <h3>UseState</h3>

                        <ul>
                            <li><em class="gras">useState</em> permet de définir des données. Et si ces données changent, React va refaire le rendu du composant</li>
                            <li>Pour utiliser useState, il faut appeler le hook : <em class="gras">import React, { useState } from 'react';</em></li>
                            <li><em class="gras">const [donnée, modifierLaDonnée] = useState('valeur de départ')</em>: ici on crée une variable qui gère la lecture de la donnée du state (donnée) et une qui gère la modification de la donnée (modifierLaDonnée).</li>
                            <li><em class="gras">const selectedPosts = postsData.filter((post) => post.category === selectedCategory)</em> : fonction qui filtre sur les posts dont la catégorie est `selectedCategory`</li>
                        </ul>

                    <h3>UseEffect</h3>

                        <ul>
                            <li><em class="gras">useEffect</em> permet d'exécuter une fonction au chargement d'un composant donné. Attention: il ne peut pas être utilisé avant un useState !</li>
                            <li>Pour qu'un useEffect se charge qu'au chargement initial, on lui passe un tableau vide, ex: <em class="gras">useEffect(() => {loadPosts();}, []);</em></li>
                            <li><em class="gras"></em></li>
                        </ul> 

                    <h3>Axios et ajax</h3>

                        <ul>
                            <li><em class="gras">Axios</em> permet de faire des requêtes Ajax</li>
                            <li><em class="gras">yarn add axios</em> permet d'installer axios</li>
                            <li>Pour utiliser axios, on fait <em class="gras">import axios from 'axios';</em></li>
                            <li><em class="gras">Exemple de requête axios:</em></li>
                            <p>axios.get('https://oclock-open-apis.now.sh/api/blog/posts')</p>
                            <p>.then((response) => {</p>
                            <p>setPosts(response.data);</p>
                            <p>})</p>
                            <p>.catch((error) => {</p>
                            <p>console.error(error);</p>
                            <p>});</p>
                            <li><em class="gras">.then</em> gère le comportement en cas de succès</li>
                            <li><em class="gras">.catch</em> gère le comportement en cas d'erreur</li>
                            <li><em class="gras">dangerouslySetInnerHTML</em> peut être utilisé pour lire le code html renvoyé dans le json d'une API dont on récupère la data avec axios. Mais il faut le nettoyer avec DOMPurify.sanitize avant.</li>
                            <li><em class="gras">npm install dompurify --save</em> permet d'installer DOMPurify</li>
                            <li><em class="gras">import DOMPurify from 'dompurify';</em> permet d'importer DOMPurify</li>
                            <li><em class="gras">ALLOWED_TAGS: ['em', 'strong']</em> permet de n'autoriser que les balises em et strong dans un bout de code nettoyé</li>
                            <li><em class="gras">const cleanCode = DOMPurify.sanitize(excerpt, configSanitize);</em> permet de nettoyer excerpt en utilisant la fonction configSanitize (fonction à créer soi-même)</li>
                            <li><em class="gras">return {__html: cleanCode,};</em> permet de renvoyer du html nettoyé</li>
                            <li><em class="gras">dangerouslySetInnerHTML={createMarkup()}</em> permet de renvoyer du html propre en appelant la fonction createMarkup, à créer soi-même</li>
                            <li>Pour plus de détails, voir e6 de la spé<em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>