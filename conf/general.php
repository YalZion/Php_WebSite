<?php

// Configuration general

$Bdd = "Site";
$BddHost = "localhost";
$BddUser = "root";
$BddPasse = "root";
$BddDsn = "mysql:dbname=".$Bdd.";host=".$BddHost."";
$er = "";
$su = "";

define("DSN", $BddDsn);
define("USER", $BddUser);
define("PASSE", $BddPasse);
define("D_LANGUE", "fr");
define("URL", "http://localhost:8888/");
define("EMAIL", "webmaster@gmail.com");
define("NOM_DU_SITE", "Site Web");

?>