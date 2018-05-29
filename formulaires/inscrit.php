<?php

require_once("./traitements/inscrit.php");

if (fCheck($er))
	echo GE_ERREUR.$er;
if (fCheck($su))
	echo GE_SUCESS.$su;
?>
<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>?page=2">
	<input type="text" name="login" placeholder="<?= GE_LOGIN ?>">
	<input type="password" name="passe" placeholder="<?= GE_PASSE ?>">
	<input type="password" name="repasse" placeholder="<?= IN_REPASSE ?>">
	<input type="email" name="email" placeholder="<?= IN_EMAIL ?>">
	<input type="email" name="reemail" placeholder="<?= IN_REEMAIL ?>">
	<input type="submit" name="inscrit" value="<?= IN_BOUTON ?>">
</form>
<?php
if (in_array(2, $PageAccepter))
	echo '<a href="'.URL.'index.php?page=1">'.CO_BOUTON.'</a>';
?>