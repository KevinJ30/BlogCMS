<?php

/*********************************************************** 
 * Toutes les fonctions lier à la base de données          *
 ***********************************************************/

/**
 * bdd_connect() : Connection a la base de données
 * @return Object : instance de l'objet PDO
 **/
function bdd_connect(){
	$config = loadConfig("GENERAL_config.json");
	$dsn = "mysql:dbname=".$config->database->dbname.";host=".$config->database->host;

	// Si une erreur survient on indique un message d'erreur
	try{
		$bdd = new PDO($dsn, $config->database->username, $config->database->password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $bdd;
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

/**
 * bdd_query($stements, $first = false) 
 * 
 *  Permet de faire une requête de type query
 * 
 * @param $statements : requête sql
 * @param $first : retourne le premiere élément
 **/
function bdd_query($statements, $first = false){
	$bdd = bdd_connect();
	$req = $bdd->query($statements);
	return $first ? $req->fetch() : $req->fetchAll();
}

/**
 * bdd_prepare($statements, $data, $first) : Permet de faire une requête de type prepare
 * 
 * @param $statements : requête sql
 * @param Array $data : données de la requête préparé
 * @param $first : retourne le premiere élément
 **/
function bdd_prepare($statements, $data, $first = false){
	$bdd = bdd_connect();
	$req = $bdd->prepare($statements);
	$req->execute($data);

	return $first ? $req->fetch() : $req->fetchAll();
}

