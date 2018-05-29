<?php

// Gestion des pages
if (fCheck($_GET['page']))
	$page = fSecu($_GET['page']);
else
	$page = 1; // Page par default

// si inscription est demander et qu'il est deja connecter
if ($page == 2 && fCheck($_SESSION['user']['login']))
	$page = 1;
// si deconnection est demander et qu'il n'a pas deja de connection
if ($page == 3 && !fCheck($_SESSION['user']['login']))
	$page = 1;

if ($page < 1 || $page > 3)
	$page = 1;

/*
---------------------------------------------------
Pages :
---------------------------------------------------
1 -> accueil
2 -> inscription
	* Impossible d'y acceder AVEC une Session ouverte
3 -> deconnection
	* Impossible d'y acceder SANS une Session ouverte
*/

?>