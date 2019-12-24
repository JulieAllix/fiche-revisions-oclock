<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Saison 4 - POO </h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

 
            <article class="topic">

                <h2>SQL, BDD</h2>

                    <h3>Phpmyadmin</h3>

                        <ul>
                            <li><em class="gras">http://localhost/phpmyadmin/</em> permet d'accéder à PMA</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Exemples d'instructions SQL</h3>

                        <ul>
                            <li><em class="gras">SELECT * FROM `tableName`</em> permet de récupérer le contenu d'une table</li>
                            <li><em class="gras">SELECT * FROM `tableName` WHERE `id`=2</em> permet de récupérer le contenu d'une colonne spécifique</li>
                            <li><em class="gras">SELECT * FROM `tableName` ORDER BY `name`</em></li> : par défault ORDER BY fait un tri croissant : si on souhaite le préciser mais facultatif, on rajoute le mot clé ASC après le nom du champ. Pour obtenir l'ordre décroissant, on utilise : DESC.
                            <li><em class="gras">SELECT * FROM `tableName` WHERE `email` LIKE '%@gmail.com%'</em> : permet de filtrer sur les valeurs contenant une chaîne de caractère précise</li>
                            <li><em class="gras">SELECT * FROM `author` WHERE `image` IS NULL</em></li>
                            <li><em class="gras">SELECT `title`,`published_date` FROM `post`</em></li>
                            <li><em class="gras">SELECT COUNT(*) AS `nbArticles` FROM `post`</em> : Compter le nombre d'articles et renommer la colonne en nbArticles</li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Etapes pour utiliser SQL dans un fichier php</h3>
                        
                        <h4>Etape 1 : connexion à la base de données via instanciation de la classe PDO (PHP Data Objects)</h4>
                            <ul>
                                <li>$dataSourceName = 'mysql:dbname=oblog;host=localhost;charset=UTF8';</li>
                                <li>$user = 'oblog';</li>
                                <li>$password = 'oblog';</li>
                                <li>try {</li>
                                <li>$pdoDBConnexion = new PDO(</li>
                                <li>$dataSourceName,</li>
                                <li>$user,</li>
                                <li>$password,</li>
                                <li>array(</li>
                                <li>PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING</li>
                                <li>)</li>
                                <li>);</li>
                                <li>} catch (PDOException $exception) {</li>
                                <li>echo 'Connexion échouée : ' . $exception->getMessage();</li>
                                <li>}</li>
                            </ul>
                        
                        <h4>Etape 2 : on écrit sa requête dans une string</h4>
                        <ul>
                            <li>$sql = '</li>
                            <li>SELECT *</li>
                            <li>FROM `author`</li>
                            <li>';</li>
                        
                        </ul>

                        <h4>Etape 3 : on exécute la requête de type SELECT avec query</h4>
                        <ul>
                            <li>$pdoStatement = $pdoDBConnexion->query($sql);</li>
                            <li>var_dump($pdoStatement);</li>
                            <li>if ($pdoStatement === false) {</li>
                            <li>var_dump($pdoStatement->errorInfo());</li>
                            <li>exit('Il y a eu un problème, désolé :-/');</li>
                            <li>}</li>
                        </ul>

                        <h4>Etape 4 : on récupère le résultat de la requête</h4>
                        <ul>
                            <li>$results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);</li>
                        
                        </ul>
            </article>

            <article class="topic">

                <h2>POO</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">$this</em> fait référence à l'objet qui a appelé la méthode</li>
                            <li><em class="gras">Une méthode</em> est une fonction à l'intérieur d'une classe</li>
                            <li><em class="gras">L'encapsulation</em> désigne le principe de regrouper des données avec un ensemble de méthodes permettant de les lire ou de les manipuler, empêchant l'accès aux données par un autre moyen que les services proposés. L'encapsulation permet donc de garantir l'intégrité des données contenues dans l'objet</li>
                            <li>Il est possible de comparer deux fichiers dans VSC : il faut les sélectionner puis <em class="gras">clic droit, comparer</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Balises, propriétés, etc</h3>

                        <ul>
                            <li><em class="gras">class className {}</em> permet de définir une classe</li>
                            <li><em class="gras">public function __construct()</em> est une méthode qui permet d'attribuer automatiquement des valeurs aux paramètres</li>
                            <li><em class="gras">$objet -> propriété</em> permet d'afficher la valeur d'une propriété</li>
                            <li><em class="gras">$objet = new class();</em> permet de créer un objet à partir d'une classe</li>
                            <li><em class="gras">$objet->propriété = valeur;</em> permet d'attribuer une valeur à une propriété</li>
                            <li><em class="gras">$objet->méthode(paramètre);</em> permet d'appeler une méthode sur un objet</li>
                            <li><em class="gras">private</em> contrairement à public, private vérouille l'accès aux propriétés et méthodes qui sont dans un objet (elles sont accessibles uniquement depuis le contexte interne de l'objet). On utilise plutôt private pour les propriétés et public pour les fonctions</li>
                            <li><em class="gras">$objet->fonction();</em> permet d'appeler une méthode publique</li>
                            <li><em class="gras">str-replace('ce que je veux remplacer','par quoi', élément où l'appliquer)</em> permet de remplacer une string</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                </article>

        </section>

        <section id="second-section">

            <article class="topic"> 

                <h2>En vrac</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">Network</em> dans l'inspecteur de Chrome permet de voir s'il manque des éléments qui ont été appelés dans le code (img par ex)</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Git : branches</h2>

                    <h3>Bon à savoir</h3>

                        <ul>
                            <li><em class="gras">Les branches</em> ont un historique de commits séparé</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Commandes git</h3>
                        <ul>
                            <li><em class="gras">origin</em> alias pour pointer vers le repo d'origine</li>
                            <li><em class="gras">git remove-v</em> permet de voir à qui correspndent les alias</li>
                            <li><em class="gras">git pull</em> récupérer les modifs d'un repo sur Github</li>
                            <li><em class="gras">git fetch</em> récupérer les modifs d'un repo sur Github, mais ne permet pas de faire de modifs (n'écrase pas la version précédente en local)</li>
                            <li><em class="gras">git checkout nomDeLaBranche</em> permet de basculer sur une branche/récupérer une branche</li>
                            <li><em class="gras">git checkout -b nomDeLaBranche</em> permet de créer une nouvelle branche et de basculer dessus</li>
                            <li><em class="gras">git branch</em> montre les branches qui existent (l'étoile indique celle sur laquelle je suis)</li>
                            <li><em class="gras">git merge nomDeLaBranche</em> fusionne la branche avec master (il faut d'abord se positionner sur la branche master avec git checkout master)</li>
                            <li><em class="gras">git branch -a</em> permet de voir les branches dispo en local et celles dispo sur Github (en rouge)</li>
                            <li><em class="gras">git push -u origin nom-de-la-branche</em> permet de pusher une branche nouvellement créée</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 

           

            <article class="topic">

                <h2>Exemples utiles</h2>

                    <h3>Exemple d'utilisation de __construct</h3>

                        <p>public function __construct($name = 'Inconnue', $gender = 'Inconnu', $birthdate = '0000-00-00') {</p>
                        <p>$this->name = $name;</p>
                        <p>$this->gender = $gender;</p>
                        <p>$this->birthdate = $birthdate;</p>
                        <p>}</p>

                    <h3>Exemple d'utilisation d'une fonction dans une classe</h3>

                        <p>public function credit($amount) {</p>
                        <p>$this->balance += $amount;</p>
                        <p>}</p>

                    <h3>Exemple de définition d'une classe</h3>

                        <p>class MyClass</p>
                        <p>{</p>
                        <p>private $property;</p>
                        <p>public function myMethod()</p>
                        <p>{</p>
                        <p>...</p>
                        <p>}</p>
                        <p>}</p>
                        <p></p>
                        <p></p>

                    <h3>Exemple de getter/setter manuels</h3>

                        <p>class Person {</p>
                        <p>private $secret = 123</p>
                        <p>public function getSecret(</p>
                        <p>{</p>
                        <p>return $this->secret;</p>
                        <p>}</p>
                        <p>public function setSecret($newSecret)</p>
                        <p>{</p>
                        <p>if(is_int($newSecret)) {</p>
                        <p>$this->secret = $newSecret;</p>
                        <p>}</p>
                        <p>}</p>
                        <p>}</p>
                    
                    <h3>Exemple de getter/setter avec méthode PHP</h3>

                        <p>class Person</p>
                        <p>{</p>
                        <p>private $secretCode = 123;</p>
                        <p>private $age;</p>
                        <p>public function __get($property)</p>
                        <p>{</p>
                        <p>if( "age" == $property) {</p>
                        <p>return $this->age;</p>
                        <p>}</p>
                        <p>elseif ("secretCode" == $property) {</p>
                        <p>echo "propriété privée";</p>
                        <p>}</p>
                        <p>else {</p>
                        <p>echo "propriété n'existe pas";</p>
                        <p>}</p>
                        <p>}</p>
                        <p>public function __set($property, $value)</p>
                        <p>{</p>
                        <p>if("age" == $property && is_int($value)) {</p>
                        <p>$this->age = $value;</p>
                        <p>}</p>
                        <p>elseif ("secretCode" == $property) {</p>
                        <p>echo "c'est mon secret, pas touche."</p>
                        <p>}</p>
                        <p>else {</p>
                        <p>echo "propriété ou valeur invalide";</p>
                        <p>}</p>
                        <p>}</p>
                        <p>}</p>
                        <p></p>
                    
            </article>


            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>