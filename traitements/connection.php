<?php

if (($_SERVER['REQUEST_METHOD'] == "POST") && fCheck($_POST['connect'])) {
	if (fCheck($_POST['login']) && fCheck($_POST['passe'])) {
		$l = fSecu($_POST['login']);
		$p = fSecu($_POST['passe']);
		$r = User::connect($l, $p);
		if ($r == 1)
			$er = CO_ACTIVENON;
		else if ($r == 2)
			$er = CO_PASSENON;
		else
			fRedi(URL);
	}
	else
		$er = GE_MANQUES;
}

?>