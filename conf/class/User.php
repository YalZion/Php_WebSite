<?php

class User {
	public static function inscrit($l, $e, $p, $t) {
		$p = password_hash($p, PASSWORD_BCRYPT);
		$r = Bdd::connect()->prepare("INSERT INTO user (id, login, passe, token, rank, email, valide) VALUES ('', :login, :passe, :token, '0', :email, '0')");
		$r->bindParam(':login', $l, PDO::PARAM_STR, 55);
		$r->bindParam(':passe', $p, PDO::PARAM_STR, 255);
		$r->bindParam(':token', $t, PDO::PARAM_STR, 15);
		$r->bindParam(':email', $e, PDO::PARAM_STR, 255);
		$r->execute();
	}
	public static function connect($l, $p) {
		$r = Bdd::connect()->prepare("SELECT * FROM user WHERE login=:login");
		$r->bindParam(':login', $l, PDO::PARAM_STR, 55);
		$r->execute();
		$d = $r->fetch(PDO::FETCH_ASSOC);
		if (password_verify($p, $d['passe'])) {
			if ($d['valide'] == 1) {
				$_SESSION['user'] = array();
				$_SESSION['user']['login'] = $d['login'];
				$_SESSION['user']['email'] = $d['email'];
				$_SESSION['user']['rank'] = $d['rank'];
			}
			else
				return 1;
		}
		else
			return 2;
	}
	public static function token($e, $t) {
		$r = Bdd::connect()->prepare("SELECT * FROM user WHERE email=:email");
		$r->bindParam(':email', $e, PDO::PARAM_STR, 255);
		$r->execute();
		$d = $r->fetch(PDO::FETCH_ASSOC);
		if ($t == $d['token']) {
			if ($d['valide'] == 0) {
				$tmp = 1;
				$r = Bdd::connect()->prepare("UPDATE user SET valide=:valide WHERE email=:email");
				$r->bindParam(':email', $e, PDO::PARAM_STR, 255);
				$r->bindParam(':valide', $tmp);
				$r->execute();
			}
			else
				return 2;
		}
		else
			return 1;
	}
}

?>