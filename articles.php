<html>
	<head>
		<title>Titre de ma page</title>
		<meta charset="utf8">
	</head>
	<body>

<?php

require "lib/includes.php";

var_dump(bdd_query('SELECT * FROM articles'));

// Chargement de la vue
loadView("articles", "list.view.php");
?>
	
	</body>
</html>

