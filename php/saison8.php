<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 8 - </h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Création d'un thème</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>On dynamise une page html pour en faire un thème à l'aide de fonctions php<em class="gras"></em></li>
                            <li>Il existe un plugin sur WP qui permet de gérer les sites multi-lingues<em class="gras"></em></li>
                            <li>Pour dynamiser un paragraphe, on utilisera l'outil <em class="gras">customizer</em></li>
                            <li>La doc se trouve dans <em class="gras">Theme Handbook</em></li>
                            <li><em class="gras">Query Monitor</em> est un plugin essentiel à installer. Il permet entre autres de voir les requêtes SQL que WP a fait pour nous, et d'en retirer si on le souhaite.</li>
                            <li>C'est le système de <em class="gras">hooks</em> qui permet de modifier un site WP comme on veut (dans Hooks & Actions : hooks correspond aux raccourcis, et actions à toutes les actions enclenchées derrière)</li>
                        </ul>

                    <h3>Dynamiser le header</h3>

                        <ul>
                            <li><em class="gras">language_attributes();</em> permet de dynamiser le balise html de langue</li>
                            <li><em class="gras">bloginfo( 'charset' );</em> permet de dynamiser l'encodage. Mais bloginfo peut récupérer de nombreuses autres infos (ex: name, description, etc), voir la doc pour plus d'infos</li>
                            <li><em class="gras">wp_head();</em> ajoute dans < head> toutes les balises nécessaires au bon fonctionnement de WordPress</li>
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

                    <h3>Dynamiser le footer</h3>

                        <ul>
                            <li><em class="gras">wp_footer();</em> ajoute dans < footer> toutes les balises nécessaires au bon fonctionnement de WordPress</li>
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

                    <h3>Dynamiser un article</h3>

                        <ul>
                            <li>Pour dynamiser un article, il faut l'encadrer de la super boucle :<em class="gras"></em></li>
                            <li><em class="gras">< ?php</em></li>
                            <li><em class="gras">if ( have_posts() ):</em></li>
                            <li><em class="gras">while ( have_posts() ) :</em></li>
                            <li><em class="gras">the_post();</em></li>
                            <li><em class="gras">?></em></li>
                            <li><em class="gras">< ?php endwhile;</em></li>
                            <li><em class="gras">endif; ?></em></li>
                            <li>Dans l'article, on peut utiliser des fonctions comme <em class="gras">< ?php the_title(); ?> (the_author, the_date, etc)</em> pour dynamiser le contenu</li>
                            <li><em class="gras">the_quelquechose</em> fait un echo, tandis que <em class="gras">get_the_quelquechose</em> fait un return, donc il faut adapter la balise php entrante en fonction</li>
                            <li><em class="gras">home_url();</em> permet de dynamiser l'url de la homepage</li>
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

                <h2></h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
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