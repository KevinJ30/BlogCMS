<?php
require "lib/includes.php";

loadTemplate("header.html");

// chargement de la liste des articles
$articles = bdd_query('SELECT * FROM articles WHERE activated = 1');

// Chargement de la vue
loadView("articles", "list.view.php");

loadTemplate("footer.html");