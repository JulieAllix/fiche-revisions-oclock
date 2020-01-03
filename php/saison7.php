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

                <h2>Lumen</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Lumen est un micro-framework de Laravel</li>
                            <li>Lumen a son propre router</li>
                            <li>Dans la doc de Lumen, il faut faire attention à consulter la doc de la bonne version (nous avons installé la v6)</li>
                            <li>On peut appeler par exemple un header en faisant <em class="gras">< ?= view('layout.header'); ?></em></li>
                            <li></li>
                            <li></li>
                            <li><em class="gras">Blade (https://laravel.com/docs/6.x/blade)</em> permet de simplifier le mélange de code php avec html (mais ajoute une nouvelle syntaxe)</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>MVC</h3>

                        <ul>
                            <li>Le nom des routes permet de faire un <em class="gras">reverse-routing</em> (générer des url depuis le nom de la route)</li>
                            <li><em class="gras">$param = $request->input('param');</em> permet de récupérer la valeur d'un paramètre envoyé en GET (qui a pour nom param dans cet exemple)</li>
                            <li>Pour utiliser $request->input, il faut appeler les paramètres <em class="gras">Request $request</em> dans la méthode utilisée, et bien penser à placer un <em class="gras">use Illuminate\Http\Request;</em> dans notre controller</li>
                            <li><em class="gras">return response()->json([data])</em> permet d'envoyer du contenu (ici [data]) au format Json</li>
                            <li><em class="gras">return redirect()->route('routeName')</em> permet de rediriger vers une URL en appelant la route qui lui correspond</li>
                            <li><em class="gras">Exemple de route :</em>$router->get('/toto-route',['uses' => 'MainController@toto', 'as'   => 'toto']);</li>
                            <li>Dans l'exemple ci-dessus, @toto désigne <em class="gras">la méthode qui va être appelée</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                        <h3>DB</h3>

                            <ul>
                                <li>Pour se connecter à une DB, il suffit d'aller dans le fichier <em class="gras">.env</em> et de remplir les <em class="gras">DB_DATABASE, DB_USERNAME et DB_PASSWORD</em></li>
                                <li></li>
                                <li></li>
                                <li>Pour faire une requête SQL dans une page, il faut penser à faire l'appel <em class="gras">use Illuminate\Support\Facades\DB;</em></li>
                                <li><em class="gras">$tableList = DB::select('SELECT * FROM `table`');</em> permet de récupérer les données d'une table</li>
                                <li>On peut aussi faire <em class="gras">$tableList = Table::all();</em> pour récupérer les données d'une table</li>
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
    
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>