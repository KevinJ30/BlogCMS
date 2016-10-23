<html>
	<head>
		<title>Titre de ma page</title>
		<meta charset="utf8">
	</head>
	<body>

<?php

require "lib/includes.php";


bdd_connect();



// Chargement de la vue
loadView("articles", "list.view.php");
?>
	
	</body>
</html>

