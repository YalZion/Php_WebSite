<?php

if (fCheck($_GET['token']) && fCheck($_GET['email'])) {
	$t = fSecu($_GET['token']);
	$e = fSecu($_GET['email']);
	if (Check::cemail($e)) {
		$v = User::token($e, $t);
		if ($v == 1)
			$er = VA_INCORRECT;
		else if ($v == 2)
			$er = VA_DEJAVALIDER;
		else
			$su = VA_SUCCESS;
	}
	else
		$er = VA_EMAILNON;

}

if (fCheck($er))
	echo GE_ERREUR.$er;
if (fCheck($su)) {
	echo GE_SUCESS.$su;
	fRedi(URL, 2);
}

?>