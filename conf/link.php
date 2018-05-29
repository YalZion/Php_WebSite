<?php

// Link des fichiers

require_once("./conf/general.php");
require_once("./conf/fonctions.php");
require_once("./conf/languages.php");
require_once("./langues/".$langue.".php");
require_once("./conf/envoi.php");
require_once("./conf/pages.php");

require_once("./conf/class/Bdd.php");
require_once("./conf/class/User.php");
require_once("./conf/class/Check.php");

require_once("./traitements/inscrit.php");
require_once("./traitements/connection.php");

?>