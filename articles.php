<?php

require "lib/includes.php";
loadTemplate("header.html");

// Chargement de la vue
loadView("articles", "list.view.php");

loadTemplate("footer.html");

