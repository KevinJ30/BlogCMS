<?php
require "lib/includes.php";

loadTemplate("header.html");

if(request_isPost()){
	
}

// Chargement de la vue
loadView("users", "login.view.php");

loadTemplate("footer.html");