<?php

require "lib/includes.php";
loadTemplate("header.html");


$test = " titre de ma page";

// Chargement de la vue
loadView("articles", "list.view.php");

loadTemplate("footer.html");

