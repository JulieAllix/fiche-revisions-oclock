<?php require 'partials/head.php'; ?>
<?php //require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 1 - HTML & CSS</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic" id="CSS">

                <h2>CSS: astuces, balises, propriétés</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>La font-size par défaut est <em class="gras">16px</em>.</li>
                            <li>Si on utilise deux polices différentes pour un même selecteur, c'est le selecteur qui est le plus bas qui l'emporte (système en cascade).</li>
                            <li>Order de priorité: id > class > span</li>
                            <li><em class="gras">!important</em> indique une priorité absolue. Il permet un quick fix avant une démo, mais en dehors de ce cas spécifique il vaut mieux ne pas l'utiliser</li>
                            <li>Exemples de balises de type <em class="gras">block</em>: p, section, h1-h6 ...</li>
                            <li>Exemples de balises de type <em class="gras">in-line</em>: img ...</li>
                            <li>Appliquer une margin-right et une margin-left auto permet de centrer un bloc.</li>
                            <li>Le margin-padding d'un élément in-line ne fonctionne que sur les côtés.</li>
                            <li>Il vaut mieux éviter d'utiliser le padding pour espacer les balises a: c'est mauvais pour l'UX (rend cliquable les espaces autour du texte). On utilisera plutôt une margin.</li>
                            <li>Le <em class="gras">flux</em> correspond à la disposition logique des éléments.</li>
                            <li>Quand un élément sort du flux, ses enfants sortent aussi. Un élément hors flux se positionne par rapport à son plus proche parent hors-flux.</li>
                            <li>Quand on a un élément qui a une marge, il va repousser tous ses parents qui n'ont pas de padding.</li>
                            <li>Un media query s'écrit tout en bas d'un fichier css.</li>
                            <li>Pour centrer un texte dans une div (axe vertical), on peut donner la height de la div à la propriété line-height</li>
                            <li><em class="gras">::selection</em> permet de styliser le surlignage</li>
                            <li><em class="gras">::first-letter</em> permet de styliser la première lettre d'un texte</li>
                            <li><em class="gras">href="#divName" dans un lien permet de scroller vers l'élément de la page qui comporte cet id</em> permet de rendre les transitions du scroll plus agréables</li>
                            <li><em class="gras">html { scroll-behavior: smooth; }</em> permet de rendre les transitions du scroll plus agréables</li>
                            <li><em class="gras">filter: invert(1)</em> permet de créer un dark mode rapidement</li>
                            <li><em class="gras">html {font-size:}</em> permet de définir la taille qui servira de base pour notre unité rem</li>
                            <li>Pour mettre une couleur en dégardé dans du texte, on peut procéder ainsi: <em class="gras">p {background: linear-gradient(to left, color1, color 2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: inline;}</em></li>
                        </ul>

                    <h3>Mise en page classique</h3>

                        <ul>
                            <li><em class="gras">border: radius Xpx</em> permet d'arrondir les bords. On peut définir des valeurs différentes pour les 4 bords, en commençant en haut à gauche.</li>
                        </ul>

                    <h3>Unités de mesure</h3>

                        <ul>
                            <li><em class="gras">rem</em>: unité de mesure liée à la taille définie dans la balise html</li>
                            <li><em class="gras">px</em>: pixel</li>
                            <li><em class="gras">vh</em>: hauteur de la fenêtre. 1vh = 1% de la fenêtre courante de hauteur; donc si on veut un élément à la hauteur de notre fenêtre, il faudra le mettre à 100vh.</li>
                            <li><em class="gras">vw</em>: largeur de la fenêtre.</li>
                        </ul>

                    <h3>Balises et propriétés concernant la police/le texte</h3>

                        <ul>
                            <li><em class="gras">font-family</em>: permet de choisir la typographie. Monospace laisse autant d'espace à chaque lettre, sans-serif retire l'empattement.</li>
                            <li><em class="gras">font-size</em>: permet de définir la taille de la police
                            <aside class="additional-info"><p>font-size: 0 peut gommer les marges entre plusieurs éléments qui apparaissent parce qu'il y a des espaces entre eux dans le html</p></aside></li>
                            </li>
                            <li><em class="gras">font-weight</em>: permet de définir la "graisse" de la police</li>
                            <li><em class="gras">font-style</em>: normal, italic, oblique, oblique X deg</li>
                            <li><em class="gras">text-shadow</em>: px px px color</li>
                            <li><em class="gras">text-transform</em>: modifie la capitalisation d'un texte
                                <ul class="list-level-two">
                                    <li>capitalize: la première lettre de chaque mot sera affichée en capitale</li>
                                    <li>uppercase: permet de tout mettre en majuscules</li>
                                    <li>lowercase: permet de tout mettre en minuscules</li>
                                    <li>none: pas de modification</li>
                                </ul> 
                            </li>
                            <li><em class="gras">text-align</em>: permet d'aligner le texte. Ne permet que de centrer les éléments in-line, pas les blocs.</li>
                            <li><em class="gras">list-style</em>: permet de définir le style des puces</li>
                        </ul>
                    
                    <h3>Balises et propriétés concernant le box-model</h3>

                        <ul>
                            <li><em class="gras">padding</em>: permet de définir l'espacement interne (le gras du corps)</li>
                            <li><em class="gras">border</em>: permet de définir la bordure (la peau du corps). Astuce : mettre une couleur 'transparent' permet de ne pas tout décaler dans la mise en page lorsque l'on souhaite ajouter une bordure au hover</li>
                            <li><em class="gras">margin</em>: permet de définir l'espacement externe (l'espace interpersonnel). On peut gérer les quatre marges en même temps --> margin: haut droite bas gauche. Si on ne met que 3 valeurs, la margin gauche récupère la valeur de la droite; si on n'en met que 2, haut = bas et gauche = droite.</li>
                            <li><em class="gras">box-sizing: border-box</em>: indique que la taille définie s'applique sur tout, padding compris</li>
                        </ul>

                    <h3>Balises et propriétés concernant le lay-out</h3>

                        <h4>Propriétés s'appliquant au parent:</h4>

                            <ul>
                                <li><em class="gras">display:</em></li>
                                    <ul class="list-level-two">
                                        <li>flex: indispensable pour utiliser les propriétés de flex</li>
                                        <li>block: permet de transformer un élément in-line en élément block</li>
                                        <li>in-line: permet de transformer un élément block en in-line (impossile d'utiliser les propriétés width et height d'un élément inline. On peut jouer sur les margin et padding mais ils ne s'appliqueront que sur l'axe horizontal)</li>
                                        <li>inline-block: du pt de vue ext: inline; du point de vue intrinsèque: bloc</li>
                                    </ul>
                                <li><em class="gras">flex-direction</em>: orientation des éléments (row, row-reverse, column, column-reverse). 
                                <aside class="additional-info">Attention: lorsque la direction est column, cela change les sens d'action des autres propriétés (par exemple, align-items va déplacer les éléments sur l'axe horizontal, et plus vertical).</aside></li>
                                <li><em class="gras">flex-wrap</em>: pour gérer l'écrasement des blocs (nowrap, wrap, wrap-reverse)</li>
                                <li><em class="gras">flex-flow</em>: combine flex-direction et flex-wrap</li>
                                <li><em class="gras">justify-content</em>: pour déplacer horizontalement (flex-start, flex-end, center, space-between, space-around, space-evenly)</li>
                                <li><em class="gras">align-items</em>: pour déplacer verticalement (flex-start, flex-end, center, baseline, stretch)
                                <aside class="additional-info"><p>align-items: flex-start permet notamment de redimensionner une box en alignant les éléments par le haut.</p>
                                </li>
                                <li><em class="gras">align-content</em>: détermine l'espace entre les lignes</li>
                            </ul>

                        <h4>Propriétés s'appliquant à l'enfant:</h4>

                            <ul>
                                <li><em class="gras">order</em>: pour changer l'ordre des blocs (-X, 0, X)</li>
                                <li><em class="gras">flex-grow</em>: pour indiquer la quantité d'espace dispo que l'élément doit prendre au sein du container</li>
                                <li><em class="gras">flex-shrink</em></li>
                                <li><em class="gras">flex-basis</em>: pour définir la taille d'un élément avant que l'espace restant soit distribué</li>
                                <li><em class="gras">flex</em>: combinaison de flex-grow,-shrink et -basis</li>
                                <li><em class="gras">align-self</em>: pour déplacer verticalement un élément seul (flex-start, flex-end, center, baseline, stretch)</li>
                            </ul>

                        <h4>Autres:</h4>

                            <ul>
                                <li><em class="gras">background-image: url()</em>: permet de mettre une image en background, qui n'a pas vraiment de sens autre que décoratif et ne nécessite donc pas forcément d'apparaître en html.</li>
                                <li><em class="gras">float</em>: permet de fixer un bloc et de laisser le flux se former autour (left, right, none, inherit)
                                <aside class="additional-info"><p>ex: Wikipedia</p></aside></li>
                                <li><em class="gras">clear</em>: l'élément cible va se placer en-dessous d'un élément qui flotte à côté</li>
                                <li><em class="gras">inherit</em>: la valeur sera héritée du plus proche parent pour lequel cette propriété est définie</li>
                                <li><em class="gras">width: calc(X% - Xpx)</em>: solution standard pour espacer des éléments de façon standard + les redimensionner</li>
                                <li><em class="gras">overflow-x: scroll</em>: permet d'ajouter une barre de scroll</li>
                            </ul>

                    <h3>Balises et propriétés concernant le positionnement avancé</h3>

                        <ul>
                            <li><em class="gras">position</em>: 
                                <ul class="list-level-two">
                                    <li>static: postionnement classique</li>
                                    <li>relative: crée un clone invisible pour déplacer l'élément sans modifier la disposition générale. Se déplace avec left, right, top, bottom par rapport à sa position initiale (top pousse vers le bas, right vers la gauche, etc).</li>
                                    <li>absolute: l'élément est arraché du flux sans clone, donc les autres éléments bougent. Par défaut, l'élément se place au début de son parent.</li>
                                    <li>fixed: l'élément est fixé. Son référentiel est le viewport. Si on scrolle, il reste là.</li>
                                    <li>sticky: l'élément est d'abord static, puis quand on descend, il reste collé à l'écran (mélange fixed/relative)</li>
                                </ul>
                            </li>
                            <li>Pour positionner un élément sur un autre, on peut passer l'élément à positionner derrière en position:relative et l'élément à positionner dessus en position:absolute (l'élément derrière doit être parent de l'autre élément)</li>
                            <li><em class="gras">z-index</em>: permet de positionner un élément devant ou derrière un autre. La valeur -1 le fait passer derrière le flux.</li>
                        </ul>

                    <h3>Transitions, animations, etc</h3>

                        <ul>
                            <li><em class="gras">selecteur html: hover</em>: permet de définir ce qu'il se passe lors d'un survol de la zone correspndant au selecteur</li>
                            <li><em class="gras">transition: effet durée</em>: permet de paramétrer l'effet et la durée souhaitée pour une transition. "all" fait transiter tout ce qui est "transitable". /!\ Cette balise ne doit pas être placée dans l'état modifié mais dans l'état d'origine.</li>
                            <li><em class="gras">parent: hover > enfant {}</em>: Quand on survole le parent, l'enfant subit une transition</li>
                            <li><em class="gras">transform: scale(X)</em>: permet de modifier la taille d'un élément</li>
                            <li><em class="gras">@keyframes name</em>: permet de créer une animation. On définira les modifications d'apprence selon des pourcentage. Puis on utilisera la propriété animation: name Xs infinite alternate pour utiliser l'animation créée.</li>
                        </ul>

                    <h3>Responsive design</h3>

                        <ul>
                            <li><em class="gras">max-width ou min-width</em>: permettent de définir des limites max et min de width</li>
                            <li><em class="gras">@media (max-width : Xpx) {}</em>: breakpoint qui permet de faire du responsive design</li>
                            <li><em class="gras">display: none</em>: permet de ne pas afficher un élément</li>
                        </ul>


            </article> 
        
        </section>

        <section id="second-section">

            <article class="topic" id="HTML">

                <h2>HTML: astuces, balises, propriétés</h2>
        
                    <h3>Bon à savoir</h3>
        
                        <ul>
                        <li>div et span sont "le choix du pauvre" : à utiliser quand il n'y a pas d'utilité sémantique à la mise en forme d'un élément (c'est meilleur pour le SEO et l'accessibilité)</li>
                        <li>L'ordre des feuilles de style dans le header a son importance. <em class="gras">Toujours</em> mettre le link du reset <em class="gras"></em>avant</em> le style.</li>
                        <li>Il ne peut y avoir qu'un seul main et un seul h1 par page. Mais header et footer sont des balises à usage illimité.</li>
                        </ul>
        
                    <h3>Balises et propriétés liées à la sémantique</h3>
        
                        <ul>
                            <li><em class="gras">aside</em>: s'utilise pour des apartés</li>
                            <li><em class="gras">section</em>: permet de délimiter une section dans laquelle on va regrouper plusieurs éléments</li>
                            <li><em class="gras">div</em>: élément de division du contenu. Sert à regrouper une section sans véritable utilité sémantique.</li>
                            <li><em class="gras">span</em>: permet de sélectionner un petit élément pour lui donner une mise en forme spéciale sans véritable utilité sémantique.</li>
                            <li><em class="gras">em et strong</em>: permettent de mettre en valeur des sections de texte importantes. Il n'y a pas de balise pour accorder moins d'importance à un bout de texte. Dans ce cas, on utilisera un <em class="gras">span</em>.</li>
                            <li><em class="gras">article</em>: désigne un objet, un item, un ensemble cohérent d'information</li>
                        </ul>
        
                    <h3>Balises et propriétés liées à la nature de l'objet</h3>
        
                        <ul>
                            <li><em class="gras">a</em>: désigne un lien hypertexte</li>
                            <li><em class="gras">nav</em>: désigne la navigation. a est un enfant direct de nav.</li>
                            <li><em class="gras">target:"_blank"</em>: permet d'ouvrir un lien dans un nouvel onglet.
                            <aside class="additional-info"><p>Il serait judicieux d'ajouter du texte pour prévenir de l'ouverture de l'onglet.</p></aside></li>
                            <li><em class="gras">img src="" alt=""</em>: désigne une image. src la source et alt le texte alternatif en cas d'impossibilité de voir l'image.</li>
                        </ul>

                    <h3>Balises et propriétés liées aux tableaux</h3>
        
                        <ul>
                            <li><em class="gras">table</em>: balise qui encadre le tableau</li>
                            <li><em class="gras">thead</em>: balise qui encadre le header</li>
                            <li><em class="gras">tbody</em>: balise qui encadre le body</li>
                            <li><em class="gras">th</em>: header du tableau </li>
                            <li><em class="gras">tr</em>: désigne une colonne du tableau</li>
                            <li><em class="gras">td</em>: désigne une cellule du tableau</li>
                            <li><em class="gras">scope="col"</em>: propriété qui permet de relier les cellules du tableau à leurs en-têtes</li>
                        </ul>
            </article>   

            <article class="topic" id="general">

                <h2>Connaissances générales</h2>

                    <h3>Conventions d'écriture</h3>
                        <ul>
                            <li><em class="gras">camelCase</em>: exempleTypique</li>
                            <li><em class="gras">PascalCase</em>: ExempleTypique</li>
                            <li><em class="gras">snake_case</em>: exemple_typique</li>
                            <li><em class="gras">kebab-case</em>: exemple-typique</li>
                            <li><em class="gras">snake_case & kebab-case</em> sont les plus répandues en CSS</li>
                        </ul>

            </article>

            <article class="topic" id="shortcuts">

                <h2>Raccourcis utiles</h2>

                    <h3>Sur la console</h3>
                        <ul>
                            <li><em class="gras">/var/www/html/</em>: permet d'accéder aux challenges et exos faits en cours</li>
                        </ul>

                    <h3>Sur VSC</h3>

                        <ul>
                            <li><em class="gras">Alt + Z</em>: retour à la ligne auto</li>
                            <li><em class="gras">Alt + flèche</em>: déplacer un bout de code</li>
                            <li><em class="gras">MAJ + TAB</em>: décaler des lignes de code vers la gauche</li>
                            <li><em class="gras">CTRL + D</em>: multi-sélection</li>
                            <li><em class="gras">CTRL + H</em>: recherche-remplace</li>
                            <li><em class="gras">CTRL + espace</em>: réveiller Emmet</li>
                            <li><em class="gras">header + main + footer</em> (sans espaces): raccourci Emmet pour structurer son body rapidement</li>
                            <li><em class="gras">!</em>: raccourci Emmet pour créer la base d'un fichier HTML rapidement</li>
                            <li><em class="gras">img[src="../images/exemple$$.jpg" alt="exemple n°$$"]*X</em>: raccourci Emmet pour ajouter X img en une fois</li>
                            <li>Color Picker permet de récupérer une couleur</li>
                            <li>Dans CSS, on peut appliquer des caractéristiques à plusieurs selecteurs. <aside class="additional-info"><p>ex: header, footer {}</p></aside></li>
                        </ul>
                
                    <h3>Sur Chrome</h3>

                        <ul>
                            <li><em class="gras">CTRL + V</em>: permet d'accéder au plan en HTML d'un site. Les erreurs s'affichent en rouge.</li>
                            <li><em class="gras">CTRL + F5</em>: ignore le cache lors d'un refresh</li>
                        </ul>

            </article> 

            <article class="topic" id="Git">

                <h2>Git</h2>

                    <h3>Astuces, bon à savoir</h3>

                        <ul>
                            <li>Dans GitHub, dans "Code", "X commits", clic-droit examiner: historique des commits.</li>
                            <li>git clone url-du-repo dossier-cible: permet de cloner un repo vers un dossier cible</li>
                        </ul>

                    <h3>Commandes sur la console</h3>

                        <ol>
                            <li><em class="gras">git status</em>: voir s'il y a des sauvegardes à faire</li>
                            <li><em class="gras">git add</em>: valider</li>
                            <li><em class="gras">git add.</em>: ajoute tout le dossier courant</li>
                            <li><em class="gras">git commit -m ""</em>: sauvegarder en laissant un message</li>
                            <li><em class="gras">git log</em>: permet de voir le statut des commit</li>
                            <li><em class="gras">git push</em>: envoyer vers GitHub</li>
                            <li><em class="gras">git reset</em>: permet de revenir au dernier commit</li>
                            <li><em class="gras">git commit --amend</em>: permet d'apporter des petites modifs au dernier commit</li>
                        </ol>

            </article>

        </section>

    </main>

    <?php require 'partials/footer.php'; ?>