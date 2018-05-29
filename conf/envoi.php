<?php

function eValide($l, $e, $t) {
	$message = $l.",<br/>".EN_VALIDEMES1;
	// Lien a ecrire une fois changer
	$message += "<br/><a href='".URL."index.php?pg=3&vd=".$t."'>".URL."index.php?pg=3&vd=".$t."</a><br/>";
	$message += EN_VALIDEMES2;
	$sujet = EN_VALIDESUJET;
	$header = "";
	$header = "From: ".NOM_DU_SITE." <".EMAIL.">\n>";
	$header += "Content-type: text/html; charset=iso-8859-1\n";
	if (!mail($e, $sujet, $message, $header))
		$er = GE_EMAILNON;
	else
		$su = GE_EMAIL;
}

?>