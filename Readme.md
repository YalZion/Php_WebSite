# Status : En Cours de dévellopement

## Php Website
Mise en place d'un site web multifonction facilement configurable en PDO / PHP sans framework.

## Configuration
### Espace Membre :
Pour désactiver l'espace membre il faut :
- Retirer les id 2, 3, 4 ainsi que mettre la variable $con a false;
```
13 $con = false;
...
32 $PageAccepter = array(1);
```