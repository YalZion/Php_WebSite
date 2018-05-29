<?php
session_start();
require_once("./conf/link.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if ($page != 2 && $con)
		require_once("./formulaires/connection.php");
	if ($page == 2)
	 	require_once("./formulaires/inscrit.php");
	if ($page == 3)
		require_once("./traitements/deconnection.php");
	echo "<hr/>";
	if ($page == 4)
		require_once("./traitements/valide.php");
	?>
</body>
</html>