<?php

/*********************************************************** 
 * Toutes les fonctions lier à la base de données          *
 ***********************************************************/

function bdd_connect(){
	$config = loadConfig("GENERAL_config.json");
	$dsn = "mysql:dbname=".$config->database['dbname'];
}