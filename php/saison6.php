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

                <h2>Ajax & jQuery</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Le langage commun à js et php est le <em class="gras">json</em></li>
                            <li>Ajax, c'est du js qui communique avec un serveur en asynchrone</li>
                            <li><em class="gras">() => {}</em> est l'équivalent de function(){}</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>jQuery</h3>

                        <ul>
                            <li>jQuery est une librairie js. Elle permet une écriture rapide, intuitive et lisible du code JS.</li>
                            <li>Pour pouvoir utiliser jQuery, il faut d'abord copier le lien de l'API depuis code.jquery.com dans notre projet (par exemple dans l'index, dans le html)</li>
                            <li>Cet appel de jQuery doit se trouver avant les autres fichiers JS</li>
                            <li><em class="gras">$('#id')</em> permet de sélectionner un élément du DOM par son id</li>
                            <li><em class="gras">.on('event','function')</em> permet d'ajouter un event listener sur un élément du DOM (on peut le retirer avec .off)</li>
                            <li><em class="gras">$element.text('test')</em> permet de modifier le contenu d'un élément (.text peut être remplacé par .html ou autre selon les besoins)</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Ajax</h3>

                        <ul>
                            <li>La méthode Ajax permet d'appeler un serveur de manière asynchrone (voir exemple ci-dessous)</li>
                            <li>On peut transmettre des variables via la méthode ajax en ajoutant <em class="gras">data: {nomVariable1: "hello", nomVariable2: "test"}</em></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Méthode Ajax - exemple</h3>

                        <ul>
                            <li>let request = $.ajax({</li>
                            <li>url: 'ajax/test.php', // l'url du serveur à interroger</li>
                            <li>method: 'GET', // GET pour récupèrer de l'info (methode HTTP)</li>
                            <li>dataType: 'html', // car test.php contient du html</li>
                            <li>});</li>
                            <li>request.done((response) => {</li>
                            <li>$("#content").html(response);</li>
                            <li>});</li>
                            <li>request.fail(() => {</li>
                            <li>console.error("La requête n'a pas fonctionné")</li>
                            <li>});<em class="gras"></em></li>
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