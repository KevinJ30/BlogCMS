<?php

/*********************************************************** 
 * Toutes les fonctions lier à la base de données          *
 ***********************************************************/

function bdd_connect(){
	$config = loadConfig("GENERAL_config.json");
	$dsn = "mysql:dbname=".$config->database->dbname.";host=".$config->database->host;

	// Si une erreur survient on indique un message d'erreur
	try{
		$bdd = new PDO($dsn, $config->database->username, $config->database->password);
	}
	catch(PDOException $e){
		if($config->debug){
			echo "<p><strong>Impossible de se connecté à la base de données.</strong></p> <p><strong>Erreur : </strong>".utf8_encode($e->getMessage())."</p>";
		}
		else
		{
			echo "Impossible de se connecté à la base de données";
		}
	}

}