<?php

if (($_SERVER['REQUEST_METHOD'] == "POST") && fCheck($_POST['inscrit'])) {
	if (fCheck($_POST['login']) && fCheck($_POST['passe']) && fCheck($_POST['repasse']) && fCheck($_POST['email']) && fCheck($_POST['reemail'])) {
		$lo = fSecu($_POST['login']);
		$pa = fSecu($_POST['passe']);
		$rp = fSecu($_POST['repasse']);
		$em = fSecu($_POST['email']);
		$re = fSecu($_POST['reemail']);
		if ($pa == $rp) {
			if ($em == $re) {
				if (!Check::user($lo)) {
					if (!Check::cemail($em)) {
						$to = fAlea();
						User::inscrit($lo, $em, $pa, $to);
						
					}
					else
						$er = IN_EMAILEX;
				}
				else
					$er = IN_LOGINEX;
			}
			else
				$er = IN_EMAILDIF;
		}
		else
			$er = IN_PASSEDIF;
	}
	else
		$er = GE_MANQUES;
}

?>