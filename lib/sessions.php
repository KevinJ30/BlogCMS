<?php
	/*********************************************************** 
 	 * Démarrage de la session et contient toutes              *
 	 * les fonctions lier au sessions                          *
 	 ***********************************************************/

	/**
	 * session_get($key) : récupére la valeur de la clé
	 * @param $key : clé du tableaux
	 * @return retourne la valeur de la session
	 **/
	function session_get($key){
		// Si la clé n'existe pas on retourne une erreur
		if(array_key_exists($key, $_SESSION)){
			return $_SESSION[$key];
		}
		else
		{
			throw new Exception("La clé n'existe pas dans la session");
		}
	}

	/**
	 * session_set($key, $value) : rajoute une valeur dans la session
	 * @param $key : clé du tableau
	 * @param $value : valeur de la clé
	 **/
	function session_set($key, $value){
		$_SESSION[$key] = $value;
	}

	// Démarrage de la session
	session_start();
