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
                            <li>Dans du JSx, il est plus facile d'utiliser des conditions ternaires plutôt que des if, ou alors, il faut faire les traitements avant le return pour conserver un JSx propre<em class="gras"></em></li>
                            <li><em class="gras">{10 < 100 && "ok"}</em> permet de faire : si 10 < 100, afficher 'ok'</li>
                            <li>{isTrue && 'ok'}<em class="gras"> fonctionne aussi</em></li>
                            <li>{!isTrue && 'nope'}<em class="gras"> ferait un équivalent du else</em></li>
                            <li>Quand on est dzns un map, <em class="gras">il faut nécessairement définir une key</em></li>
                            <li>Pour manipuler un objet, <em class="gras">il faut en créer un nouveau pourle remplacer, pas l'écraser</em></li>
                            <li><em class="gras">yarn add react-feather</em> permet d'installer la librairie d'icônes https://github.com/feathericons/react-feather</li>
                            <li><em class="gras">const highestId = Math.max(...tasks.map((task) => task.id));</em> est un exemple de générateur d'id</li>
                            <li><em class="gras">Ctrl + Shift + P</em> puis écrire snippets permet de se créer des raccourcis pour générer des bouts de code basiques</li>
                            <li><em class="gras">rbc</em>: snippet que je me suis créé pour afficher les bases d'un composant</li>
                            <li><em class="gras">Ctrl + ,</em> permet d'accéder aux settings en cours dans VSCode</li>
                            <li><em class="gras"><>< /></em> est une div invisible: permet de regrouper des éléments</li>
                            <li><em class="gras">yarn add tinycolor2</em> utilitaire pour manipuler des couleurs -> permet entre autres de générer des couleurs plus claires ou plus foncées</li>
                            <li>Penser à <em class="gras">box-shadow</em> pour améliorer le design</li>
                            <li><em class="gras">overflow</em> permet de scroller dans la zone dans laquelle on le place (css)</li>
                            <li><em class="gras">overflow-x: hidden</em> : ce qui dépasse sur l'axe vertical sera caché</li>
                            <li><em class="gras">  &::-webkit-scrollbar{background-color: none;</em> permet de customiser la scrollbar</li>
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
                            <li>Pour utiliser une image, il faut en faire un import<em class="gras"></em></li>
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

            <article class="topic">

                <h2>Semantic UI</h2>
                    
                    <h3>Installation</h3>

                        <ul>
                            <li><em class="gras">yarn add semantic-ui-react</em></li>
                            <li>Puis <em class="gras">yarn add semantic-ui-css</em></li>
                            <li>Puis on fait l'import suivant dans notre fichier point d'entrée : <em class="gras">import 'semantic-ui-css/semantic.min.css';</em></li>
                            <li>Un <em class="gras">Segment</em> est une boîte</li>
                            <li><em class="gras">itemsPerRow</em> dans Card.Group permet de définir le nombre de cartes par rang</li>
                            <li><em class="gras">fluid</em> dans un composant permet de donner une width de 100% au composant</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Champs contrôlés</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Un composant contrôlé contient un champ de saisie. Le composant récupère auprès d'un composant parent la valeur qu'il doit afficher dans le champ, et informe le composant parent s'il faut changer la valeur (par exemple quand l'utilisateur saisit un caractère). <em class="gras"></em></li>
                            <li>En Jsx, on relie un label à son input avec <em class="gras">htmlFor="name"</em> dans le label et <em class="gras">id="name"</em> dans l'input</li>
                            <li>On peut utiliser des useState en paramètres d'un composant, exemple: <em class="gras">const Field = ({ value, changeValue }) => {</em></li>
                            <li>Ainsi, on peut par exemple modifier les données définissant l'input de la manière suivante:<em class="gras">value={value}</em> et <em class="gras">onChange={handleChange}</em></li>
                            <li><em class="gras">onChange={function}</em> permet d'appeler une fonction à chaque modification du champ d'un formulaire</li>
                            <li>Dans cet exemple, changeValue sera de type fonction dans la définition des PropTypes: <em class="gras">changeValue: PropTypes.func.isRequired</em></li>
                            <li>On appellera donc le composant de la manière suivante: <em class="gras">< Field value={email} changeValue={setEmail} /></em></li>
                            <li>Attention : il vaut mieux placer les useState le plus haut possible, si possible dans App. Sinon, <em class="gras">à chaque changement de vue, il faudra recréer des useState</em></li>
                            <li><em class="gras">setFields({...fields, [name]: value,});</em> permet de déverser l'objet actuel fields et de changer la valeur du champ</li>
                            <li><em class="gras">Field.defaultProps = {value: '',};</em> permet de définir une valeur par défaut pour un props </li>
                            <li>Le traitement de data, <em class="gras">c'est dans App !</em></li>
                            <li><em class="gras">yarn add classnames</em> permet d'utiliser la librairie classNames</li>
                            <li><em class="gras">const classCss = classNames('task', {'task--done': done,})</em>: la classe css 'task--done' ne sera présente que si done vaut true</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Middlewares</h2>

                    <h3>Initiation aux Middlewares</h3>

                        <ul>
                            <li>Un middleware permet de gérer les actions asynchrones (ex: requête à une API).<em class="gras"></em></li>
                            <li>Un middleware se définit dans le dossier middleware par <em class="gras">export default store => next => (action) => { fonction; next(action); }</em> : store de redux, middleware suivant, action qui vient d'être dispatchée</li>
                            <li>Pour appliquer un middleware dans notre store, on utilise la fonction applyMiddleware de Redux. Puis, on l'ajoute en argument de la fonction createStore (dans enhancers), en plus du reducer. On l'importe avec <em class="gras">import { createStore, applyMiddleware } from 'redux';</em></li>
                            <li>On récupère composeWithDevTools avec <em class="gras">import { composeWithDevTools } from 'redux-devtools-extension';</em>. on va s'en servir pour créer les enhancers.</li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Astuces d'amélioration de l'affichage</h2>

                    <h3>Astuces générales</h3>

                        <ul>

                            <li><em class="gras">ref</em> donne la référence vers l'élément du DOM généré. S'utilise en important useRef.</li>
                            <li><em class="gras">ElementDuDOM.current</em> cible l'élément en cours</li>
                            <li><em class="gras">.scrollTo</em> permet de scroller vers un élément en particulier</li>
                            <li><em class="gras">href="#monid"</em> permet d'aller sur l'élément de ma page qui a l'id monid</li>
                            <li>Pour cibler un élément du DOM par un scroll de façon précise, on peut utiliser <em class="gras"><a href="https://developer.mozilla.org/fr/docs/Web/API/Element/getBoundingClientRect">getBoundingClientRect</a></em></li>
                            <li><em class="gras">scroll-behavior: smooth;</em> en css permet de ralentir la vitesse du scroll</li>
                            <li><em class="gras">@keyframes grow {}</em> permet de créer une animation, on peut la place dans GlobalStyles, et on l'appellera avec 'animation: grow .4s' par exemple dans l'élément qui nous intéresse, par exemple dans le body (grow est un exemple)</li>
                            <li><em class="gras">word-break: break-word;</em> permet de casser les mots trop longs s'ils prennent toute la largeur</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Faire apparaître un élément par glissement depuis la droite</h3>

                        <ul>
                            <li>Sur la position de départ, on place un <em class="gras">transform: translateX(245px);</em> (ou autre nb de pixels, c'est un ex), qui va pousser le composant hors du champ de vision</li>
                            <li>Sur la classe correspondant à l'ouverture du composant, on place un <em class="gras">transform: translateX(0);</em></li>
                            <li>Puis on viendra placer sur ComponentStyled en général un transition, ex: <em class="gras">transition: .6s;</em></li>
                            <li>Pour plus de détails, voir la branche settings de la chatroom sur le repo de Philippe<em class="gras"></em></li>
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
                            <li>Pour définir la background color, on peut passer par <em class="gras">createGlobalStyle</em></li>
                            <li><em class="gras">import styled, { createGlobalStyle } from 'styled-components';</em></li>
                            <li><em class="gras">export const GlobalStyle = createGlobalStyle`</em></li>
                            <li><em class="gras">body {</em></li>
                            <li><em class="gras">background-color: black;</em></li>
                            <li><em class="gras">}</em></li>
                            <li><em class="gras">`;</em></li>
                            <li>Puis on l'utilise comme un composant <em class="gras">< Globalstyle /></em> après le AppStyle. Il sera injecté directement dans head, il n'est pas rattaché à un élément du DOM.</li>
                            <li>On peut styliser un composant déjà stylisé avec un styled-components en mettant le nom du composant à la place de styled.div par exemple<em class="gras"></em></li>
                            <li>On peut faire passer des props dans ComposantStyled. A l'appel du compo style on va faire : <em class="gras">< ComposantStyled variableName={propsName}></em></li>
                            <li>Puis dans le fichier ComposantStyled, on va utiliser la props ainsi, par exemple si on veut affecter la background-color : <em class="gras">background-color: ${props => props.variableName};</em></li>
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

                    <h3>Etapes</h3>

                        <ul>
                            <li><em class="gras">Structure de base - identification des vues</em></li>
                            <li><em class="gras">Définition du Theme et AppStyled</em></li>
                            <li><em class="gras">Créer le projet en statique</em></li>
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
                            <li><em class="gras">On ne doit jamais modifier le state par nous même !</em> On génère un nouveau tableau / génère une copie.</li>
                            <li>const newTasks = tasks.push(newTask) est interdit. A la place on fera: <em class="gras">const newTasks = [...tasks, newTask]</em></li>
                        </ul>

                    <h3>UseEffect</h3>

                        <ul>
                            <li><em class="gras">useEffect</em> permet d'exécuter une fonction au chargement d'un composant donné. Attention: il ne peut pas être utilisé avant un useState !</li>
                            <li>Pour qu'un useEffect se charge qu'au chargement initial, on lui passe un tableau vide, ex: <em class="gras">useEffect(() => {loadPosts();}, []);</em></li>
                            <li><em class="gras">useEffect(() => {}, [selectedCategory])</em> permet de faire en sorte que le useEffect se charge au moment où selectedCategory change</li>
                            <li><em class="gras"></em></li>
                            <li>Exemple de façon de trier la data d'une API à l'aide de map: <em class="gras">setCategories(response.data.map((category) => category.label))</em></li>
                        </ul> 
                    
                    <h3>UseParams</h3>

                        <ul>
                            <li>Les <em class="gras">params</em> décrivent les segments dynamiques de l'url</li>
                            <li><em class="gras">const { slug } = useParams();</em> permet de récupérer le paramètre (partie dynamique) capturé par la route</li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>UseRef</h3>

                        <ul>
                            <li>On peut cibler un élément du DOM avec <em class="gras">ref={searchInputElement}</em>, puis on fera searchInputElement = useRef(null)</li>
                            <li>L'import de useRef se fait avec <em class="gras">import React, { useRef } from 'react';</em></li>
                            <li><em class="gras">searchInputElement.current.focus();</em> permet de placer le focus automatiquement dans l'input (si cette ligne de code est placée dans un useEffect)</li>
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
                            <li><em class="gras">.finally(() => {})</em> permet d'effectuer une action après then ou catch, quoi qu'il arrive.</li>
                            <li>On peut créer un objet définissant les paramètres d'url à passer dans la reuqête axios, ex: <em class="gras">axios.get('https://api.github.com/search/repositories', axiosQueryParams).then(...etc)</em></li>
                            <li>Ici axiosQueryParams est une variable qu'on définira aillaurs par <em class="gras">const axiosQueryParams = {params: {q: searchValue,},};</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Les vues conditionnelles</h3>

                        <ul>
                            <li><em class="gras">{posts.length === 0 && < div>chargement...< /div>}</em> permet d'afficher la div chargement si la longueur du post est égale à zéro</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>  
                        </ul>

            </article>

            <article class="topic">

                <h2>React Router</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>React Router permet de <em class="gras">faciliter la navigation en créant des url, en conservant un historique de navigation, etc</em></li>
                            <li>Il s'installe avec <em class="gras">yarn add react-router-dom</em></li>
                            <li><em class="gras">import { BrowserRouter } from 'react-router-dom';</em> est à placer dans le fichier racine index.js, celui qui contient le render qui déclenche le contenu React</li> 
                            <li>Puis, dans ce même fichier, on va entourer < App /> de la balise <em class="gras">< BrowserRouter></em> afin de transmettre les infos utiles à react-router-dom</li> 
                            <li>Avec <em class="gras">Link et Route</em> on peut mettre en place une navigation: Link va gérer l'url, et Route va gérer l'affichage.</li>  
                            <li><em class="gras"></em></li>  
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>  
                        </ul>

                    <h3>Link</h3>

                        <ul>
                            <li><em class="gras">Link</em> injecte dans l'url le bout de route qui nous manque</li>
                            <li>L'import se fait avec <em class="gras">import { Link } from 'react-router-dom';</em></li>
                            <li>On va encadrer la partie où l'on veut appliquer le lien à l'aide de la balise Link, par ex: <em class="gras">< Link to={`/post/${slug}`}></em></li>
                            <li><em class="gras">NavLink</em> permet en plus de spécifier plusieurs props notamment pour ajouter des attributs de style à l'élément rendu. La classe attribuée par défaut dans un NavLink est 'active'.</li>
                        </ul>

                    <h3>Route</h3>

                        <ul>
                            <li>On place des balises <em class="gras">< Route> autour des composants que l'on souhaite afficher pour un path donné</em></li>
                            <li>Exemple de balise Route: <em class="gras">< Route exact path={category.route} key={category.route}></em></li>
                            <li>On peut aussi définir le path avec un paramètre d'url dynamique: <em class="gras">< Route path="/post/:slug"></em></li>
                            <li>L'import se fait avec <em class="gras">import { Route } from 'react-router-dom';</em></li>
                            <li>Le mot clef <em class="gras">exact</em> permet de ne cibler que le chemin exact d'une route, pas les chemins qui contiennent une partie similaire à un autre (ex : path '/' et path '/React' ont '/' en commun). Cependant il s'utilise uniquement avec des NavLink, pas avec des Link.</li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Switch</h3>

                        <ul>
                            <li><em class="gras">Switch</em> permet de définir une route par défaut si l'url ne matche aucune route, car la première route qui matche est affichée</li>
                            <li>L'import se fait avec <em class="gras">import { Switch } from 'react-router-dom';</em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Redirect</h3>

                        <ul>
                            <li>Redirect permet de <em class="gras">rediriger une url vers une autre</em></li>
                            <li>L'import se fait avec <em class="gras">import { Redirect } from 'react-router-dom';</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Rappels + Redux</h2>

                    <h3>Rappels</h3>

                        <ul>
                            <li>On composant est une fonction qui retourne du Jsx<em class="gras"></em></li>
                            <li><em class="gras">mount</em>: moment de la création des composants (chargement initial de la page)</li>
                            <li><em class="gras">update</em>: moment où le composant est modifié</li>
                            <li><em class="gras">unmount</em>: moment où on enlève le composant de React, sert à faire le ménage (timers en cours, écouteurs d'événements, etc). Pour cela, il faut placer un return dans le useEffect, et le composant dans le [].</li>
                            <li>Pour déclencher un useEffect au moment où une variable change, il faut mettre cette variable dans le [] de fin du useEffect<em class="gras"></em></li>
                        </ul>
                    
                    <h3>Redux</h3>

                        <ul>
                            <li>On istalle Redux avec <em class="gras">yarn add redux</em></li>
                            <li>L'import de createStore se fait ainsi : <em class="gras">import { createStore } from 'redux';</em></li>
                            <li><em class="gras">yarn add redux-devtools-extension</em> permet de faire le lien entre notre projet et l'extension Chrome de redux</li>
                            <li>L'import se fait dans store dans index.js avec <em class="gras">import { devToolsEnhancer } from 'redux-devtools-extension/logOnlyInProduction';</em></li>
                            <li>Toujours dans le même fichier, on utilise devToolsEnhancer avec <em class="gras">const store = createStore(reducer, devToolsEnhancer());</em></li>
                            <li><em class="gras">getState()</em> permet de récupérer le state (lecture)</li>
                            <li><em class="gras">dispatch( actionVoulue )</em> permet de changer le state (écriture)</li>
                            <li><em class="gras">subscribe</em> fonctionne comme un useEffect sans le [] à la fin : à chaque modification il s'enclenche</li>
                            <li>On range les noms d'actions ( en majuscules) dans un dossier ections, dans un fichier index.js<em class="gras"></em></li>
                            <li>On importe le fichier ainsi : <em class="gras">import * as actions from 'src/actions';</em></li>
                            <li>On utilise les variables ainsi : <em class="gras">actions.DESCRIPTION_DE_L_ACTION</em></li>
                            <li><em class="gras">yarn add react-redux</em> permet d'ajouter une librairie qui propose différents outils pour relier react et redux</li>
                            <li><em class="gras">Provider</em> est le fournisseur du store à l'ensemble de l'application</li>
                            <li>On importe provider dans l'index.js initial avec <em class="gras">import { Provider } from 'react-redux';</em> puis on entoure < APP /> de balises < Provider store={store}></li>
                            <li>Puis on importe le store avec <em class="gras">import store from 'src/store';</em></li>
                            <li><em class="gras">import { useSelector } from 'react-redux';</em> permet de récupérer de la data provenant du state (redux)</li>
                            <li><em class="gras">import { useDispatch } from 'react-redux';</em> permet de modifier le state (redux)</li>
                            <li>Pour pouvoir utiliser useDispatch, on doit l'exécuter une première fois avec <em class="gras">const dispatch = useDispatch();</em></li>
                            <li>Connect, qu'on importe avec <em class="gras">import { connect } from 'react-redux';</em> est un outil de react-redux qui va préparer des données pour un composant</li>
                            <li><em class="gras">const mapStateToProps = (state) => ({props: state.props,});</em> transpose les données qui proviennent du state en props pour le composant</li>
                            <li><em class="gras">const mapDispatchToProps = (state) => ({});</em></li>
                            <li><em class="gras">ownProps</em>: ce sont les props qui figurent déjà sur un élément</li>
                            <li><em class="gras">Le container</em> fait le lien entre React (les composants) et Redux grâce à <em class="gras">connect</em></li>
                            <li>Le principe du <em class="gras">dispatch</em> est de déclencher une action auprès du state</li>
                            <li>Redux dev tools dispose d'une fonction dispatch pour tester ce qu'il se passe en cas de modification du state<em class="gras"></em></li>
                            <li>On peut utiliser une même fonction de modification du state pour plusieurs champs d'un formulaire. Pour cela, on va passer le name du champ ainsi que sa value en paramètres de la props créée dans le container. On créera une seule et même action qui renverra le name et la value. Puis dans le reducer, on retournera <em class="gras">[action.name]: action.value</em></li>
                            <li>On peut avoir plusieurs reducers grâce à <em class="gras">combineReducers</em></li>
                            <li>Chaque reducer aura son propre intial state<em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Socket.io</h2>

                    <h3></h3>

                        <ul>

                            <li>Pour récupérer le socket.io que l'on souhaite utiliser, on peut insérer <em class="gras">une balise script contenant l'url du socket.io</em> dans le fichier html de notre projet</li>
                            <li><em class="gras">window.io('http://localhost:3001')</em> permet de connecter notre application à socket.io</li>
                            <li>Pour créer une action pour ouvrir une connexion permanente avec le serveur (WebSocket) on peut insérer ceci dans le fichier d'actions: <em class="gras">export const wsConnect = () => ({type:WS_CONNECT,});</em></li>
                            <li>Puis, dans le fichier de base index.js, on va importer notre action avec <em class="gras">import { wsConnect } from 'src/actions/chat';</em>, et dispatcher la volonté de connecter le WebSocket avec <em class="gras">store.dispatch(wsConnect());</em></li>
                            <li>Enfin, on va créer un fichier dans le dossier middlewares correspondant à notre volonté de connexion<em class="gras"></em></li>
                            <li><em class="gras">socket.emit</em> permet d'envoyer des infos</li>
                            <li><em class="gras">socket.on</em> permet d'enr ecevoir</li>
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