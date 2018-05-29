<?php

class Check {
	public static function user($l) {
		$r = Bdd::connect()->prepare("SELECT id FROM user WHERE login=:login");
		$r->bindParam(':login', $l, PDO::PARAM_STR, 55);
		$r->execute();
		if ($r->rowCount())
			return true;
		return false;
	}
	public static function cemail($e) {
		$r = Bdd::connect()->prepare("SELECT id FROM user WHERE email=:email");
		$r->bindParam(':email', $e, PDO::PARAM_STR, 255);
		$r->execute();
		if ($r->rowCount())
			return true;
		return false;
	}
}

?>