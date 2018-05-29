<?php

class Bdd {
	private static $c = NULL;
	public static function connect(){
		try {
			if (!self::$c) {
				self::$c = new PDO(DSN, USER, PASSE);
				self::$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return self::$c;
		} catch (PDOException $e) {
			echo "Impossible de se connecter : ".$e->getMessage();
		}
	}
}

?>