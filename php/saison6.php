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
                            <li><em class="gras">${variable}</em> permet d'insérer une variable js dans une chaîne de caractères. <em class="gras">/!\ Cela ne fonctionne que si on encadre la chaîne de caractères par des backtick (` et non ')</em></li>
                            <li><em class="gras">$(app.init)</em> permet de lancer notre script à la fin du chargement du DOM</li>
                            <li>Quand on appelle une fonction via un .on('event', function), on ne met pas de () après la function, car on n'appelle pas la function tout de suite, on ne l'appelle que lorsque l'event se produit</li>
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
                            <li><em class="gras">$</em> est une fonction qui peut faire trois choses : lancer une fonction une fois que la page est chargée (ex: <em class="gras">$(app.init)</em>), créer un nouvel élément (ex: <em class="gras">$('< li>')</em>), sélectionner un élément du DOM (ex: <em class="gras">$('#id')</em>)</li>
                            <li>Pour cibler un enfant qui n'est pas un enfant direct on met un espace, exemple :<em class="gras"> $('#parent #enfant')</em></li>
                            <li>Pour cibler un enfant direct, on met un chevron, exemple :<em class="gras">$('#parent > #enfant')</em></li>
                            <li><em class="gras">let inputValue = $('#addListForm input').val()</em> : permet de récupérer la valeur de l'input contenu dans le parent addListForm</li>
                            <li>On peut aussi ajouter un id sur l'élément input: <em class="gras">let inputValue = $('#addListFormNameInput').val()</em></li>
                            <li><em class="gras">let listElement = $('#list-template').contents().clone()</em> permet ce copier le contenu de l'id list-template et de le cloner dans la variable listElement</li>
                            <li><em class="gras">listElement.find('h2').text(listName)</em> à l'intérieur de mon élément list je recherche le tag h2 pour y mettre le titre de la liste </li>
                            <li><em class="gras">element.insertBefore('#finalElt')</em> permet d'insérer element avant finalElt</li>
                            <li><em class="gras"> element.attr('id', "list-" + listId)</em> permet d'ajouter un attribut id portant le nom "list-" + listId à element</li>
                            <li><em class="gras">.addClass</em> permet d'ajouter une classe à un élément. On peut aussi en retirer un avec .removeClass</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Ajax</h3>

                        <ul>
                            <li>La méthode Ajax permet d'appeler un serveur de manière asynchrone (voir exemple ci-dessous). <em class="gras">Il est très important de toujours penser à ce caractère asynchrone !! Certaines actions doivent être codées dans le .done pour s'assurer qu'elles soient bien effectuées au bon moment.</em></li>
                            <li>On peut transmettre des variables via la méthode ajax en ajoutant <em class="gras">data: {nomVariable1: "hello", nomVariable2: "test"}</em></li>
                            <li>La méthode par défaut est GET (donc on peut ne pas la préciser si on veut utiliser la méthode GET)</li>
                            <li></li>
                            <li></li>
                            <li><em class="gras">dataType</em> est par défaut en Intelligent Guess : il peut deviner tout seul le format du contenu de l'API. Donc on peut ne pas le préciser.</li>
                            <li><em class="gras"></em>Il vaut mieux éviter les boucles while si on attend une réponse qui provient d'une requête asynchrone</li>
                            <li>Pour sélectionner un élément par son name, on peut faire <em class="gras">"element[name='element-name']"</em>, par ex: "input[name='list-name']"</li>
                            <li>On peut faire des doubles .find, par ex: <em class="gras">let newName = listElement.find('form').find("input[name='list-name']").val();</em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3>Méthode Ajax - squelette</h3>

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

            <article class="topic">

                <h2>BDD - SQL</h2>

                    <h3>BDD</h3>

                        <ul>
                            <li>Dans le cadre d'une relation <em class="gras">many to many</em>, on relie deux tables à l'aide d'une table intermédiaire</li>
                            <li>Sur Phpmyadmin, dans Structure -> Vue Relationnelle -> <em class="gras">Contraintes de clé étrangère</em> permet de restreindre les données saisies à un périmètre défini</li>
                            <li>Méthodes courantes liées à une BDD: CRUD -> Create, Read, Update, Delete</li>
                            <li></li>
                        </ul>
                    
                    <h3>SQL</h3>

                        <ul>
                            <li>Lorsqu'on inclut des variables dans notre requête SQL, on doit sécuriser notre code avec <em class="gras">la méthode bind</em>, ex :</li>
                            <li>$sql = "SELECT * FROM list WHERE id = :id";</li>
                            <li>$pdo = Database::getPDO();</li>
                            <li>$pdoStatement = $pdo->prepare($sql);</li>
                            <li>$pdoStatement->bindParam(":id", $id, PDO::PARAM_INT);</li>
                            <li>$pdoStatement->execute();</li>
                            <li></li>
                            <li>Lorsque les models font eux-même leurs requêtes SQL, on parle d'<em class="gras">Active Record</em></li>
                            <li><em class="gras">Astuce :</em> dans PHPMyAdmin, dans l'onglet insérer, il y a un bouton <em class="gras">Aperçu</em> qui permet de voir le code SQL généré par l'insertion qu'on a effectuée</li>
                            <li>Lorsque l'on fait une requête SQL pour supprimer une ligne, si la table est liée à une table liante (double foreign key), il faut d'abord supprimer les lignes qui font référence à cette ligne dans la table liante</li>
                        </ul>
    
            </article>

            <article class="topic">

                <h2>jQuery Ui</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Pour utiliser jQuery Ui, il faut ajouter un lien dans le fichier html de l'index, ex:</li>
                            <li>< script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Propriété sortable</h3>

                        <ul>
                            <li><em class="gras">.sortable</em> permet notamment de faire du drag & drop</li>
                            <li>.sortable contient des <em class="gras">options, methods & events</em></li>
                            <li>L'option <em class="gras">connectWith</em> permet de définir les autres éléments auxquels ont souhaite connecter l'élément qui va subir un drag and drop</li>
                            <li>L'event <em class="gras">receive(event, ui)</em> correspond au moment du drop d'un élément dans un autre. Ui correspond à l'élément qui subit le drag and drop. On peut le désigner par ui.item</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>
        
        </section>

        <section id="second-section">

            <article class="topic">

                <h2>En vrac</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li><em class="gras">ControllerName::class</em> est une string qui contient le namespace, par exemple: ListController:class renvoie "oKanban\Controllers\ListController"</li>
                            <li><em class="gras"><a href="https://drive.google.com/file/d/14kDawUN9ckwIxqz3nNPFONcM-3VPrLLs/view">Lien vers le schéma pour savoir quand choisir query, exec, ou prepare</a></em></li>
                            <li><em class="gras">$baseUri = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';</em></li>
                            <li><em class="gras">$this->router->setBasePath($baseUri); </em>: ces deux lignes permettent d'éviter un bug lié à la présence ou non de la base URI selon qu'on est en localhost ou en virtualhost</li>
                            <li>L'application <em class="gras">Postman</em> simule un form.</li>
                            <li><em class="gras">$pdo->lastInsertId()</em> permet de récupérer le dernier id inséré dans une table</li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Modèle MVC: méthodes statiques et abstraites</h2>

                    <h3>Méthodes statiques</h3>

                        <ul>
                            <li>En rajoutant <em class="gras">static</em> devant une méthode, on n'a plus besoin de créer un objet vide pour récupérer des objets remplis. Ex: public static function findAll().</li>
                            <li>Les méthodes et propriétés statiques sont partagées par toutes les instances, et accessibles directement à partir du nom de la classe.</li>
                            <li>Pour appeler une méthode statique dans le controller, on fait <em class="gras">Model::nomDeLaMéthode</em></li>
                            <li>Une méthode statique reste attachée à la classe et pas aux objets instanciés à partir de cette classe.</li>
                            <li><em class="gras">$this</em> ne peut pas être utilisé dans une méthode statique car cette dernière reste liée à la classe et pas à un objet. En effet, on utilise <em class="gras">self</em> pour faire référence à la classe dans laquelle on se trouve, et <em class="gras">this</em> pour faire référence à l'objet dans lequel on se trouve.</li>
                            <li><em class="gras">static</em> fait référence à la classe-type de l'objet sur lequel est appelée la méthode. Si l'objet est du type de la classe courante, le traitement est identique. Mais si l'objet est d'une classe héritant de la classe courante, le résultat peut être différent selon les propriétés de la classe fille (cf branche pls-party de l'épisode 6).</li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                        <h3>Méthodes abstraites</h3>

                        <ul>
                            <li></li>
                            <li>En rajoutant <em class="gras">abstract</em> devant une méthode dans une classe d'un fichier parent, on oblige tous les enfants de cette classe à déclarer cette méthode. Ex: abstract public static function findAll();</li>
                            <li>Lorsqu'on ajoute <em class="gras">implements JsonSerializable</em> à une classe, on l'engage à implémenter la fonction jsonSerialize. C'est une fonction PHP qui va renvoyer les données que l'on souhaite sérialiser sous forme d'un tableau associatif. Cette fonction va etre automatiquement utilisée par json_encode() qui va essayer de la trouver avec de serialiser cet objet.</li>
                            <li><em class="gras">Exemple de fonction jsonSerialize :</em></li>
                            <li>public function jsonSerialize() {</li>
                            <li>$serializedObject = [</li>
                            <li>"id" => $this->id,</li>
                            <li>"name" => $this->name,</li>
                            <li>"page_order" => $this->page_order,</li>
                            <li>"created_at" => $this->created_at,</li>
                            <li>"updated_at" => $this->updated_at,</li>
                            <li>];</li>
                            <li>return $serializedObject;</li>
                            <li>}</li>
                            <li>Cela permet notamment à json_encode d'accéder à des propriétés qui sont en visibilité <em class="gras">protected</em>.</li>
                            <li>Ici on a créé un genre de <em class="gras">getter général</em>.</li>
                        </ul>

            </article>

            <article class="topic">

                <h2>Utilisation d'API externes</h2>

                    <h3>Good to know</h3>

                        <ul>
                            <li>Les api précisent par défaut leur dataType, donc pas besoin de le préciser. On peut ne préciser que l'url pour faire appel à une API.</li>
                            <li>Une API rest est une API à laquelle on accède via le protocole http</li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>Exemple d'appel à une API</h3>
                        <p>let request = $.ajax('https://swapi.co/api/starships/');</p>
                        <p>request.done(function(response) {</p>
                        <p>let ulElt = $('<ul>');</p>
                        <p>$.each(response.results, (index, starship) => {</p>
                        <p>let liElt = $('<li>');</p>
                        <p>liElt.html(`<strong> ${starship.name} </strong> : ${starship.model}`);</p>
                        <p>ulElt.append(liElt);</p>
                        <p>});</p>
                        <p>$('#swapi').replaceWith(ulElt);</p>
                        <p>})</p>
                        <p></p>
                        <p></p>
                    
                    <h3>Autre exemple utilisant une syntaxe plus courte</h3>
                        <p>loadPeoplePage: (pageUrl, ulElement) => {</p>
                        <p></p>
                        <p>$.ajax(pageUrl).done((response) => {</p>
                        <p>$.each(response.results, (index, people) => {</p>
                        <p>$('< li>').text(people.name).appendTo(ulElement);</p>
                        <p>});</p>
                        <p>if(response.next) {</p>
                        <p>app.loadPeoplePage(response.next, ulElement);</p>
                        <p>}</p>
                        <p>});</p>
                        <p>}</p>
                        <p></p>
                    
                    <h3>Exemple de requête Ajax imbriquée</h3>
                    <p>loadMoviePlanets: (movieId) => {</p>
                    <p>$.ajax(`https://swapi.co/api/films/${movieId}/`).done((movie) => {</p>
                    <p>$.each(movie.planets, (index, planetUrl) => {</p>
                    <p>$.ajax(planetUrl).done((planet) => {</p>
                    <p>console.log(planet.name);</p>
                    <p>});</p>
                    <p>});</p>
                    <p>});</p>
                    <p>}</p>
                    <p></p>
                        
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>