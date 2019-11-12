<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 2 - PHP</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic" id="CSS">

                <h2>PHP: astuces, fonctions</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>Chaque ligne de code se termine par un <em class="gras">;</em></li>
                            <li>Les variables comencent par un <em class="gras">$</em></li>
                            <li><em class="gras">\</em> permet d'afficher les apostrophes ou les guillements comme du texte</li>
                            <li>Un fichier php est encadré par les balises <em class="gras"> < ?php</em> (sans espace) et <em class="gras">?></em></li>
                            <li><em class="gras">< ?=</em> (sans espace) est un raccourci de <em class="gras">< ?php echo</em> (sans espace)</li>
                            <li>On appelle les éléments if, while, for, etc des <em class="gras">structures de contrôle</em></li>
                            <li>Si on utilise les doubles-quotes " plutôt que les simples-quotes ', on peut afficher le contenu d'une variables.</li>
                            <li>Un nom de variable ne peut pas commencer par un chiffre</li>
                            <li>Raccourci pour incrémenter une variable :<em class="gras">$variable++;</em> (on peut aussi décrémenter avec --)</li>
                            <li><em class="gras">$variable += 5;</em> permet d'incrémenter la variable de 5. Fonctionne avec tous les opérateurs (-= += *= /= .=)</li>
                            <li><em class="gras">La boucle Foreach</em> permet de parcourir les tableaux</li>
                            <li>Php utilise le principe du <em class="gras">stateless</em> : entre deux appels au serveur, rien n'est gardé en mémoire</li>
                        </ul>

                    <h3>Fonctions</h3>

                    <ul>
                        <li><em class="gras">echo "X"</em> permet d'afficher un élément X</li>
                        <li><em class="gras">require (ou include) "nom-du-fichier.php"</em> permet d'inclure un lien vers un fichier php séparé. Privilégier require. <aside class="additional-info"><p>NB : include_once et require_once permettent de s'assurer que le fichier n'a pas déjà été inclus.</p></aside></li>
                        <li><em class="gras">__DIR__</em> est un chemin absolu, il donne le chemin complet</li>
                        <li><em class="gras">number_format($X, n)</em> permet de formater un nombre pour l'affichage. Dans cet exemple, $X est une variable, et n indique le nombre de chiffres voulus après la décimale.</li>
                        <li><em class="gras">date('d-m-Y')</em> permet d'afficher la date du jour</li>
                        <li><em class="gras">count($variable)</em> permet de compter le nombre d'éléments dans un tableau</li>
                        <li><em class="gras">var_dump($variable)</em> permet d'inspecter une variable (de voir ce qu'il y a dedans)</li>
                        <li><em class="gras">empty($variable)</em> permet de vérifier si une valeur est vide ou indéfinie</li>
                        <li><em class="gras">isset($variable)</em> permet de vérifier si une valeur est définie</li>
                        <li><em class="gras">condition ? valeur si vrai : valeur si faux</em> opérateur ternaire</li>
                        <li><em class="gras">strlen</em> retourne la longueur d'une string</li>
                        <li><em class="gras">mail($to, $subject, $message);</em> envoie un e-mail</li>
                        <li><em class="gras">header('location:urlDeLaPage')</em> permet de rediriger vers une autre page</li>
                    </ul>

                    <h3>Méthodes</h3>

                    <ul>
                        <li><em class="gras">$_GET en $_POST</em> permettent de récupérer les informations transmises dans un formulaire. Les valeurs sont remplies avec les attributs name des champs de formulaires.
                        On va pouvoir récupérer la valeur d'un champ avec $_GET['nom-du-champ']. POST est plus sécurisé car non public.</li>
                    </ul>

            </article> 

            <article class="topic" id="CSS">

                <h2>Les tableaux</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li>Exemple de tableau simple: <em class="gras">$nomDuTableau = ["Donnée x", "Donnée Y", "Donnée Z"];</em></li>
                            <li>Pour afficher la Donnée Y: <em class="gras">echo $nomDuTableau[1]</em>(la première donnée correspondant à 0)</li>
                            <li>Exemple d'ajout d'éléments à un tableau : <em class="gras">$fruits[] = "framboise";</em></li>
                            <li>Exemple de tableau associatif : <em class="gras">$fruits = [
                            "superbon" => "cerise",
                            "sucre" => "banane",
                            "acide" => "kiwi"
                            ];</em></li>
                            <li>Pour accéder à une donnée du tableau associatif, on fera : <em class="gras">echo $fruits["superbon"];</em></li>
                        </ul>

            </article> 

            <article class="topic" id="CSS">

                <h2>Les fonctions</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">function nomDeLaFonction($parametre) {}</em> permet de définir une fonction</li>
                            <li>Une fois que l'on utilise <em class="gras">return</em>, la fonction s'arrête.</li>
                            <li>A chaque fois que l'on définit une fonction, on crée une nouvelle portée de variable, c'est-à-dire qu'un nouveau stock de variable est créé.</li>

                            <li>On peut utiliser le mot-clé <em class="gras">global</em> pour utiliser une variable définie dans la portée principale</li>
                            <li>Pour accéder à une donnée du tableau associatif, on fera : <em class="gras">echo $fruits["superbon"];</em></li>
                        </ul>

                </article> 
        
        </section>

        <section id="second-section">

            <article class="topic" id="HTML">

                <h2>Raccourcis utiles</h2>
        
                    <h3>Sur la console</h3>
        
                        <ul>
                            <li><em class="gras">CTRL + C</em> permet de sortir de l'interpréteur</li>
                            <li><em class="gras">php titre-du-fichier.php</em> permet d'exécuter le script d'un fichier php sur la console</li>
                        </ul>
            </article>

            <article class="topic" id="general">

                <h2>Les boucles</h2>

                    <h3>Exemple de boucle for</h3>
                        <p>for ($i = 1; $i <= 10; $i++){</p>
                        <p>echo 'Compteur = ' . $i . '< br>';</p>
                        <p>}</p>
                    
                    <h3>Exemple de boucle while</h3>
                        <p>$counter = 1;</p>
                        <p>while ($counter <= 10) {</p>
                        <p>echo 'Compteur = ' . $counter . '< br>';</p>
                        <p>$counter++;</p>
                    
                    <h3>Exemple de boucle php dans le html</h3>
                        <p>/!\ Retirer les espaces dans les chevrons</p>
                        <p>.</p>
                        <p>< ul id="rooms-names"></p>
                        <p>< ?php for ($i = 0; $i < 4; $i++): ?></p>
                        <p>< li>< ?= $rooms[$i]; ?>< /li></p>
                        <p>< ?php endfor; ?></p>

                    <h3>Exemples de boucles foreach</h3>
                        <p>/!\ Retirer les espaces dans les chevrons</p>
                        <p>.</p>
                        <p>< ?php foreach ($tarifsAvecLibelles as $libelle => $tarif): ?>
                        <p>< li>< ?= $libelle; ?> : < ?= number_format($tarif, 2); ?> &euro ;< /li></p>
                        <p>< ?php endforeach; ?></p>
                        <p>.</p>
                        <p>Dans cet exemple, la boucle permet d'afficher tous les éléments d'un tableau.</p>
                        <p>.</p>
                        <p>< ?php foreach ($kiemtaos as $kiemtao): ?>
                        <p>< li> e-mail : < ?= kiemtao['email'] ?> < /li></p>
                        <p>< ?php endforeach; ?></p>
                        <p>.</p>
                        <p>Dans cet exemple, on n'a besoin que d'un élément du tableau associatif.</p>

            </article>

            <article class="topic" id="CSS">

                <h2>Les formulaires</h2>

                    <h3>Balises</h3>

                        <ul>
                            <li> <em class="gras">< form action="page.php" method="GET"></em> balise encadrante d'un formulaire (comporte une balise fermante). action permet de spécifier le chemin de la page qui doit traiter le formulaire; method : permet de choisir la façon dont on va soumettre les donnée </li>
                            <li> <em class="gras">< label></em> permet de définir le label (la question). L'attribut for permet de relier le label à un input, ou tout autre élément (via un attribut id)</li>
                            <li> <em class="gras">< input type=radio name="X"></em> permet de ne pouvoir sélectionner qu'un bouton radio à la fois</li>
                            <li> <em class="gras">< button></em> déclencheur pour envoyer des informations (commporte une balise fermante). Autre méthode: mettre un type="submit" dans un input.</li>
                            <li> <em class="gras">< input placeholder="texte"</em> permet d'afficher à l'intérieur d'un champ vide la valeur attendue</li>
                        </ul>

                    <h3>Les champs textes</h3>

                        <ul>
                            <li> <em class="gras">< input type="text">	</em>  N'importe quel contenu texte</li>
                            <li> <em class="gras">< input type="email"></em> Vérifie la bonne structuration d'une adresse email</li>
                            <li> <em class="gras">< input type="password"></em> Le contenu est remplacé par des *</li>
                            <li> <em class="gras">< input type="number"></em> Valeur modifiable par saisie, avec les flèches du clavier ou via les boutons intégrés</li>
                            <li> <em class="gras">< textarea>< /textarea></em> Idéal pour des saisies sur plusieurs lignes</li>
                        </ul>
                    
                        <h3>Radio & checkbox</h3>

                            <ul>
                                <li> <em class="gras">< input type="checkbox"></em> permet de sélectionner une option particulière par défaut</li>
                                <li> <em class="gras">< input type="radio" name="statut"</em> bouton radio. L'attribut name est le point commun entre toutes les valeurs associées.</li>
                            </ul>
                        
                        <h3>Liste de sélection</h3>

                            <ul>
                                <li> <em class="gras">< select name="" id="film-like">
                                <p>< option value="film1">Star Wars IV< /option></p>
                                <p>< option value="film2" selected>Star Wars V< /option></p>
                                </em> s'emploie pour un choix unique. < select> prendra l'attribut name et les différentes < option> la valeur associée grâce à value.</li>
                                <li> <em class="gras">L'attribut multiple sur le < select></em> permet de définir une liste à choix multiples</li>
                            </ul>

                </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>