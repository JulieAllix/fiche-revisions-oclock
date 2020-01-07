<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 7 - Lumen</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Démarrer un projet avec Lumen</h2>

                    <h3>Etapes d'initialisation</h3>

                        <ul>
                            <li>Lumen est un micro-framework de Laravel. Il est dédié aux API.</li>
                            <li>Pour démarrer un projet avec Lumen, se placer dans le dossier de notre choix avec la console, et taper la commande <em class="gras">composer create-project --prefer-dist laravel/lumen nom-du-projet</em></li>
                            <li>En accédant au dossier "public", si tout a bien fonctionné, le navigateur doit afficher <em class="gras">Lumen (6.2.0) (Laravel Components ^6.0)</em> (ou autre version, si une autre version a été installée)</li>
                            <li>Ensuite, créer un repo sur Github et suivre les instructions pour faire le premier push</li>
                            <li>Puis executer dans le terminal les deux commandes suivantes pour modifier les permissions du dossier storage:</li>
                            <li><em class="gras">sudo chgrp -R www-data storage</em></li>
                            <li><em class="gras">sudo chmod -R ug+rwx storage</em></li>
                            <li>Renseigner <em class="gras">APP_KEY</em> dans le fichier .env</li>
                            <li>Ouvrir le fichier bootstrap/app.php et décommenter les lignes <em class="gras">$app->withFacades();</em> et <em class="gras">$app->withEloquent();</em></li>
                            <li>Plus d'infos : <em class="gras"><a href=https://github.com/O-clock-Y/S07-E01-exo-first-lumen-project>étapes d'installation de Lumen - O'clock</a></em></li>
                            <li>Penser à préciser dans le readme.md que ceux qui récupèrent le projet doivent: </li>
                            <li>- faire un <em class="gras">composer install</em> pour télécharger les dépendances</li>
                            <li>- affecter les bons droits au dossier storage avec <em class="gras">sudo chgrp -R www-data storage</em> et <em class="gras">sudo chmod -R ug+rwx storage</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Lumen a son propre router</li>
                            <li>Dans la doc de Lumen, il faut faire attention à consulter la doc de la bonne version (nous avons installé la v6)</li>
                            <li>On peut appeler par exemple un header en faisant <em class="gras">< ?= view('layout.header'); ?></em></li>
                            <li></li>
                            <li></li>
                            <li><em class="gras">Blade (https://laravel.com/docs/6.x/blade)</em> permet de simplifier le mélange de code php avec html (mais ajoute une nouvelle syntaxe)</li>
                            <li>Dans le fichier .env, pour le développement en local, toujours mettre la valeur de <em class="gras">APP_DEBUG sur true</em>. En prod, en revanche, il faudra la passer à false.</li>
                            <li>En cas d'erreur 403 Forbidden, vérifier si le groupe de notre projet est bien www-data. Sinon, taper la commande <em class="gras">sudo chgrp www-data . -R</em> à la racine du projet</li>
                            <li><em class="gras">sudo chmod 775/chemin/vers/fichier</em> permet de donner les permission rwx au user et au groupe, et les permissions rx pour 'other'</li>
                            <li>On redirige vers une page à l'aide de <em class="gras">redirect()->route('nomDeLaRoute');</em></li>
                            <li><em class="gras">ls -l</em> dans le terminal permet de voir les autorisations des différents utilisateurs</li>
                            <li>La méthode <em class="gras">shuffle</em> permet d'aficher les éléments d'une collection dans un ordre aléatoire</li>
                            <li><em class="gras">< ?= url('/css/style.css'); ?></em> est un exemple d'url absolue</li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 

            <article class="topic">

                <h2>MVC</h2>

                    <h3>Nouvelles notions/rappels</h3>

                        <ul>
                            <li>Le nom des routes permet de faire un <em class="gras">reverse-routing</em> (générer des url depuis le nom de la route)</li>
                            <li><em class="gras">$param = $request->input('param');</em> permet de récupérer la valeur d'un paramètre envoyé en GET (qui a pour nom param dans cet exemple)</li>
                            <li>Pour utiliser $request->input, il faut appeler les paramètres <em class="gras">Request $request</em> dans la méthode utilisée, et bien penser à placer un <em class="gras">use Illuminate\Http\Request;</em> dans notre controller</li>
                            <li><em class="gras">return response()->json([data])</em> permet d'envoyer du contenu (ici [data]) au format Json</li>
                            <li><em class="gras">return redirect()->route('routeName')</em> permet de rediriger vers une URL en appelant la route qui lui correspond</li>
                            <li><em class="gras">Exemple de route :</em>$router->get('/toto-route',['uses' => 'MainController@toto', 'as'   => 'toto']);</li>
                            <li>Dans l'exemple ci-dessus, @toto désigne <em class="gras">la méthode qui va être appelée</em></li>
                        </ul>
                    
                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
    
            </article>

        </section>

        <section id="second-section">

            <article class="topic">

            <h2>Divers</h2>

                <h3>Console</h3>

                    <ul>
                        <li>Gestion des droits: u=user, g=group, o=other; r=read, w=write, x=execute</li>
                        <li>sudo -> superuser do</li>
                        <li></li>
                        <li><em class="gras"></em></li>
                    </ul>

            
                <h3>Raccourcis clavier</h3>
                    <ul>
                        <li><em class="gras">CTRL + Shift + /</em> = raccourci pour décommenter un bout de code</li>
                    </ul>
                    <p></p>
                    <p></p>
                
            </article>

            <article class="topic">

                <h2>Base de Données</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Pour se connecter à une DB, il suffit d'aller dans le fichier <em class="gras">.env</em> et de remplir les <em class="gras">DB_DATABASE, DB_USERNAME et DB_PASSWORD</em></li>
                            <li>Dans un envoi de formulaire, faire bien attention à renvoyer quelque chose dans < option value=></li>
                            <li></li>
                            <li>Pour faire une requête SQL dans une page, il faut penser à faire l'appel <em class="gras">use Illuminate\Support\Facades\DB;</em></li>
                            <li>La méthode <em class="gras">firstWhere()</em> retourne le premier élément d'une collection en fonction d'une clef fournie, ex : <em class="gras">$levelsList->firstWhere('id', $question->levels_id)->name</em> permet de renvoyer le nom d'un niveau (qui provient de la table levels) en fonction de l'id fourni (qui provient de la table question, et qui trouve son équivalent dans la table levels)</li>

                        </ul>
                    
                    <h3>Requêtes SQL</h3>

                        <ul>

                            <li><em class="gras">$tableList = DB::select('SELECT * FROM `table`');</em> permet de récupérer les données d'une table</li>
                            <li>On peut aussi faire <em class="gras">$tableList = Table::all();</em> pour récupérer les données d'une table</li>
                            <li>Pour créer des données dans la DB, on instancie d'abord la classe de la table concernée : <em class="gras">$tableName = new TableName;</em></li>
                            <li>Puis on stocke les données dans des variables, par ex <em class="gras">$tableName->name         = $name;</em></li>
                            <li>Enfin, on fait un save : <em class="gras">$tableName->save();</em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Eloquent</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Si notre DB ne respecte pas les conventions de nommage d'Eloquent, il faut venir le préciser, par exemple :</li>
                            <p>class Videogame extends Model</p>
                            <p>{</p>
                            <p>protected $table = 'videogame';</p>
                            <p>public $timestamps = false;</p>
                            <p>}</p>
                            <p></p>
                            <li></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Models</h3>

                        <ul>
                            <li>Pour définir un nouveau Model, il faut faire un <em class="gras">use Illuminate\Database\Eloquent\Model;</em></li>
                            <li>Et il faut aussi faire un <em class="gras">extends Model</em> à notre nouvelle classe</li>
                        </ul>
                    
                    <h3>Exemples de conventions de nommage d'Eloquent</h3>

                        <ul>
                            <li><em class="gras">Table names:</em> snake case plural (ex: videogames)</li>
                            <li><em class="gras">Primary key:</em> id en nom de colonne</li>
                            <li><em class="gras">Timestamps:</em> Eloquent s'attend à trouver des colonnes created_at et updated_at</li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Validation</h3>
    
                        <ul>
                            <li>Voir exercice videogame, à la racine de S07, fichier Main Controller</li>
                            <li>Pour utiliser les règles de validation, il fau faire un <em class="gras">use Illuminate\Validation\Rule;</em></li>
                            <li>On va checker ces règles dans un <em class="gras">try</em>, dans une méthode</li>
                            <li><em class="gras">'order' => Rule::in([null, 'name', 'editor'])</em> permet de vérifier que le champ 'order' est possède soit les valeurs name, editor ou nul</li>
                            <li>Dans le catch, on va gérer les exceptions (si la validation n'est pas respectée, on déclenche une erreur). Penser à faire un <em class="gras">use Illuminate\Validation\ValidationException;</em></li>
                            <li>Pour voir comment gérer la validation en front, voir le fichier <em class="gras">admin.php</em></li>
                            <li><em class="gras"></em></li>
                        </ul>
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>

<!-- 
/quiz/{id:[1-9][0-9]*} vient gérer d'abord les unités, puis les dizaines, centaines, etc 
php -S localhost:8000 -t public    permet de raccourcir l'url
-->