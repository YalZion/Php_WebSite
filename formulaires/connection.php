<?php
if (fCheck($er))
	echo GE_ERREUR.$er;
if (fCheck($su))
	echo GE_SUCESS.$su;

if (!fCheck($_SESSION['user']['login'])) {
?>
<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<input type="text" name="login" placeholder="<?= GE_LOGIN ?>">
	<input type="password" name="passe" placeholder="<?= GE_PASSE ?>">
	<input type="submit" name="connect" value="<?= CO_BOUTON ?>">
</form>
<a href="<?= URL ?>index.php?page=2"><?= IN_BOUTON ?></a>
<?php
}
else {
	echo $_SESSION['user']['login'];
	echo " <a href='".URL."index.php?page=3'>".GE_DECONNECT."</a>";
}
?>