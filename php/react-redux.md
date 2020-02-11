# Liaisons entre React et RedUx

## Approche 1

### Actions : 
- Crée les 'variables d'action' (variables décrivant les actions);
- Crée les 'fonctions d'action' (fonctions décrivant les actions de façon explicite). Ces fonctions renvoient les variables d'action sous la propriété 'type', et éventuellement d'autres propriétés si nécessaire (ex: color);
--> Donne toutes infos nécessaires pour déclencher un changement de state.

### Components:
- Si on souhaite modifier le state: appelle useDispatch et l'utilise en appelant des 'fonctions d'action' en paramètre --> puis le reducer se chargera de renvoyer le nouveau state;
- Si on souhaite lire les données du state: utilise useSelector en passant le state en paramètre pour récupérer la donnée voulue --> le state se trouve dans le store.

### Reducers:
- intialise le state
- récupère le state actuel et l'action demandée pour renvoyer le nouveau state (par exemple, si l'action était 'change direction to left' le nouveau state sera renvoyé avec sa nouvelle direction)
--> Le nouveau state sera accessible dans le store.

### Store:
- Initialise le store à partir des données du reducer (state actuel): c'est dans le store qu'on va récupérer le state actuel. 
--> Le store est importé dans le fichier index.js racine et encadre la balise App: ainsi, pas besoin de l'importer ailleurs pour l'utiliser.

Pour résumer, tout part des components:
- Si on souhaite récupérer les données du state, on va accéder au state dans le store;
- Si on souhaite modifier le state, on va utiliser les actions et les envoyer au reducer, qui va modifier le state en conséquence et renvoyer le nouveau state vers le store.

## Approche 2 (version connect)

### Actions : 
Les actions fonctionnent de la même façon que dans la version 1.

### Containers:
- Les containers importent et se servent de connect, importent les components et les actions;
- Ils définissent deux fonctions : mapStateToProps (pour récupérer les données du state) et mapDispatchToProps (pour modifier le state);
- mapDispatchToProps contient ce qui va servir de props au component : ce sont des fonctions qui utilisent la fonction dispatch, en appelant une action en paramètre;
- mapStateToProps contient ce qui va servir de props au component : elle passe le state en paramètre et récupère dans le state les propriétés que l'on souhaite récupérer;
--> Au final, on va renvoyer un container qui contient mapDispatchToProps et mapStateToProps (les props dont on a besoin) et qui précise qui en a besoin (le component).

### Components:
- Que l'on souhaite modifier le state ou lire ses données, le fonctionnement est identique: on passe les props du container en paramètre (sans avoir besoin d'importer le container) et on s'en sert directement dans le component (sans oublier de valider les props)

### Reducers:
Le reducer fonctionne de la même façon que dans la version 1.

### Store:
Le store fonctionne de la même façon que dans la version 1.

Pour résumer, par rapport à la première approche, on ajoute des containers, et le fonctionnement des components change. Le plus gros du travail s'effectuera dans les containers.