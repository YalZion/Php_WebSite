<?php

if (fCheck($_SESSION['langue']))
	$langue = fSecu($_SESSION['langue']);
else if (fCheck($_GET['langue']))
	$langue = fSecu($_GET['langue']);
else
	$langue = D_LANGUE;

if ($langue != "fr")
	$langue = D_LANGUE;

?>