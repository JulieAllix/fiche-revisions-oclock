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
                            <li></li>
                            <li></li>
                            <li></li>
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