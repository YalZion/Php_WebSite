# Status : En Cours de développement

## Php Website
Mise en place d'un site web multifonction facilement configurable en PDO / PHP sans framework.

## Configuration (Fichier de configuation)
### Espace Membre :
Pour désactiver l'espace membre il faut :
- Retirer les id 2, 3, 4 ainsi que mettre la variable $con a false;
```
13 $con = false;
...
32 $PageAccepter = array(1);
```
### Traduction (multilangue) :
- Retirer ou ajouter les langues dans le tableau.
```
33 $LangueAccepter = array("fr");
```
- Rajouter un fichier de traduction dans le dossier **langues** a partir du modele **fr.php**.
#### Attention !
_Le fichier doit avoir le meme nom que ce que vous avez ajouter au tableau avec l'extention .php_