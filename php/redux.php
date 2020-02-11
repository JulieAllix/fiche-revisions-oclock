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

                <h2>Liaison React-Redux, rôle des éléments: Approche 1</h2>

                    <h3>Actions : </h3>

                        <ul>
                            <li>- Crée les <em class="gras">'variables d'action'</em> (variables décrivant les actions);</li>
                            <li>- Crée les <em class="gras">'fonctions d'action'</em> (fonctions décrivant les actions de façon explicite). Ces fonctions renvoient les variables d'action sous la propriété <em class="gras">'type'</em>, et éventuellement d'autres propriétés si nécessaire (ex: color);</li>
                            <li>--> Donne toutes infos nécessaires pour déclencher un changement de state.</li>
                        </ul>

                    <h3>Components : </h3>

                        <ul>
                            <li>- Si on souhaite modifier le state: appelle <em class="gras">useDispatch</em> et l'utilise en appelant des 'fonctions d'action' en paramètre --> puis le reducer se chargera de renvoyer le nouveau state;</li>
                            <li>- Si on souhaite lire les données du state: utilise <em class="gras">useSelector</em> en passant le state en paramètre pour récupérer la donnée voulue --> le state se trouve dans le store.</li>
                        </ul>

                    <h3>Reducer : </h3>

                        <ul>
                            <li>- <em class="gras">intialise</em> le state</li>
                            <li>- récupère le state actuel et l'action demandée pour <em class="gras">renvoyer le nouveau state</em> (par exemple, si l'action était 'change direction to left' le nouveau state sera renvoyé avec sa nouvelle direction)</li>
                            <li>--> Le nouveau state sera accessible <em class="gras">dans le store</em>.</li>
                            <li></li>
                            <li></li>
                        </ul>

                    <h3>Store :</h3>

                        <ul>
                            <li>- <em class="gras">Initialise</em> le store à partir des données du reducer (state actuel): c'est dans le store qu'on va récupérer le state actuel.</li>
                            <li>--> Le store est importé dans le fichier index.js racine et <em class="gras">encadre la balise App</em>: ainsi, pas besoin de l'importer ailleurs pour l'utiliser.</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>En résumé :</h3>

                        <ul>
                            <li><em class="gras">Tout part des components:</em></li>
                            <li>- Si on souhaite récupérer les données du state, on va accéder au state <em class="gras">dans le store</em>;</li>
                            <li>- Si on souhaite modifier le state, on va utiliser <em class="gras">les actions et les envoyer au reducer, qui va modifier le state en conséquence et renvoyer le nouveau state vers le store.</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
            </article> 

            <article class="topic">
                <h2>Liaison React-Redux, rôle des éléments: Approche 2</h2>

                    <h3>Actions : </h3>

                        <ul>
                            <li>Les actions fonctionnent de la même façon que dans la version 1.</li>
                        </ul>

                    <h3>Components : </h3>

                        <ul>
                            <li>- Les containers importent et se servent de <em class="gras">connect</em>, importent les <em class="gras">components et les actions</em>;</li>
                            <li>- Ils définissent deux fonctions : <em class="gras">mapStateToProps</em>(pour récupérer les données du state) et <em class="gras">mapDispatchToProps</em> (pour modifier le state);</li>
                            <li>- mapDispatchToProps contient ce qui va servir de props au component : ce sont des fonctions qui utilisent la fonction <em class="gras">dispatch</em>, en appelant une action en paramètre;</li>
                            <li>- mapStateToProps contient ce qui va servir de props au component : elle passe le state en paramètre et <em class="gras">récupère dans le state les propriétés que l'on souhaite récupérer</em>;</li>
                            <li>--> Au final, on va renvoyer <em class="gras">un container qui contient mapDispatchToProps et mapStateToProps (les props dont on a besoin)</em> et qui précise <em class="gras">qui en a besoin (le component)</em>.<em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Components : </h3>

                        <ul>
                            <li>- Que l'on souhaite modifier le state ou lire ses données, le fonctionnement est identique: <em class="gras">on passe les props du container en paramètre</em> (sans avoir besoin d'importer le container) et on s'en sert directement dans le component (sans oublier de <em class="gras">valider les props</em>)</li>
                        </ul>

                    <h3>Reducer : </h3>

                        <ul>
                            <li>Le reducer fonctionne de la même façon que dans la version 1.</li>
                        </ul>

                    <h3>Store :</h3>

                        <ul>
                            <li>Le store fonctionne de la même façon que dans la version 1.</li>
                        </ul>

                    <h3>En résumé :</h3>

                        <ul>
                            <li>Pour résumer, par rapport à la première approche, on ajoute des containers, et le fonctionnement des components change. <em class="gras">Le plus gros du travail s'effectuera dans les containers</em>.</li>
                        </ul>

            </article> 

        </section>

        <section id="second-section">

            <article class="topic">

                <h2>Créer un projet from scratch en utilisant React et Redux: Partie React</h2>

                    <h3>Initialisation du projet</h3>

                        <ul>
                            <li><em class="gras">Décrire</em> dans App les différents éléments qui composent le projet (si un sous-composant n'a vocation à n'être utilisé que dans un composant, on le rangera dans le dossier de ce composant.</li>
                            <li>Créer les composants (sans le style, vides) et <em class="gras">remplacer les descriptions par les balises</em> de ces composants</li>
                        </ul>

                    <h3>Création des styles</h3>

                        <ul>
                            <li>Créer un <em class="gras">thème</em> dans style > themes.js</li>
                            <li>Créer les <em class="gras">styles</em> des composants (fichiers Styled)</li>
                        </ul>  

                    <h3>Test des composants</h3>

                        <ul>
                            <li>Créer un <em class="gras">tableau de données</em> dans App pour tester les props</li>
                            <li>Poser les <em class="gras">props</em> dans App et les <em class="gras">récupérer</em> dans les composants + les <em class="gras">valider</em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Créer un projet from scratch en utilisant React et Redux: Partie Redux</h2>

                    <h3>Etapes de mise en place</h3>

                        <ul>
                            <li><em class="gras">yarn add redux redux-devtools-extension </em></li>
                            <li>Création du store : createStore</li>
                            <li>Créer le reducer (entonoir (state et action)). On teste si le store fonctionne avec un console.log(store.getState()) dans le fichier index.js racine.</li>
                            <li>Brancher le enhancer pour les devtools (extension redux de debug)</li>
                            <li>Couper le tableau de data dans React et le coller dans l'initial state (je renseigne mon initialState dans le reducer).</li>
                        </ul>

                    <h3>Liaison des deux evironnements React + Redux</h3>

                        <ul>
                            <li><em class="gras">yarn add react-redux</em></li>
                            <li><em class="gras">Diffuser le store autour de App avec Provider</em></li>
                            <li>Création des Containers pour faire le lien entre le state géré par Redux et les Composants qui ont besoin des infos de ce state</li>
                            <li>Charger les containers au lieu des composants dans App<em class="gras"></em></li>
                            <li>Créer les actions (intentions)<em class="gras"></em></li>
                            <li>Créer un case correspondant dans le reducer</li>
                            <li>Préparer une prop pour le composant qui va utiliser l'action</li>

                        </ul>  
    
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>