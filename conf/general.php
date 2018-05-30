<?php

// Configuration general

$Bdd = "Site";
$BddHost = "localhost";
$BddUser = "root";
$BddPasse = "root";
$BddDsn = "mysql:dbname=".$Bdd.";host=".$BddHost."";
$er = "";
$su = "";

$con = true; // Possible de se connecter

/*
---------------------------------------------------
Lier
---------------------------------------------------
2 - 3 - 4 - $con => Espace Membre
---------------------------------------------------
Pages :
---------------------------------------------------
1 -> accueil
	* Obligatoire page d'entrer du site
2 -> inscription
	* Impossible d'y acceder AVEC une Session ouverte
3 -> deconnection
	* Impossible d'y acceder SANS une Session ouverte
4 -> validation
*/

$PageAccepter = array(1, 2, 3, 4);
$LangueAccepter = array("fr");

define("DSN", $BddDsn);
define("USER", $BddUser);
define("PASSE", $BddPasse);
define("D_LANGUE", "fr");
define("URL", "http://localhost:8888/");
define("EMAIL", "webmaster@gmail.com");
define("NOM_DU_SITE", "Site Web");

?>