<?php

function fCheck($v) {
	if (isset($v) && !empty($v))
		return true;
	return false;
}

function fSecu($v) {
	if (intval($v))
		return $v;
	$v = trim($v);
	$v = stripslashes($v);
	$v = htmlspecialchars($v);
	return $v;
}

function fAlea() {
	$c = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$v = str_shuffle($c);
	$v = substr($v, 0, 10);
	return $v;
}

function fRedi($u, $t=0) {
	if (!headers_sent()) {
		header("refresh: $t;url=$u");
		exit;
	}
	else
		echo "<meta http-equiv='refresh' content='$t;url=$u'>";
}

?>