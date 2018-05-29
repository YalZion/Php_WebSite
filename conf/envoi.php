<?php

function eValide($l, $e, $t) {
	$message = $l.",<br/>".EN_VALIDEMES1;
	$message += "<br/><a href='".URL."index.php?page=4&token=".$t."&email=".$e."'>".URL."index.php?page=3&token=".$t."&email=".$e."</a><br/>";
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