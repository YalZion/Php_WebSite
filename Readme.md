# Status : En Cours de développement

## Php Website
Mise en place d'un site web multifonction facilement configurable en PDO / PHP sans framework.

## Configuration (Fichier general.php)
### Espace Membre :
Pour désactiver l'espace membre il faut :
- Retirer les id ainsi que mettre la variable $con a false;
	- 2 = inscriprion
	- 3 = deconnection
	- 4 = validation
```
13 $con = false;
...
32 $PageAccepter = array(1);
```
### Traduction (multilangue) :
- Retirer ou ajouter les langues dans le tableau.
```
33 $LangueAccepter = array("fr");
...
38 define("D_LANGUE", "fr"); // Langue par default
```
- Rajouter un fichier de traduction dans le dossier **langues** a partir du modele **fr.php**.
#### _Attention ! Le fichier doit avoir le meme nom que ce que vous avez ajouter au tableau avec l'extention .php_