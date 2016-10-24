<?php

require "lib/includes.php";

auth_authorized('membre');

if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
	$article = bdd_query('SELECT * FROM articles WHERE id='.$id, true);

	if(!$article){
		redirect_404();
	}
}
else
{
	redirect_404();
}

// Chargement des template et des vues
loadTemplate("header.html");
loadView("articles", "article.view.php");
loadTemplate("footer.html");

