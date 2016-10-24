<?php

/************************************************************* 
 * Contients toutes les fonctions lié au requête utilisateur *
 *************************************************************/

/**
 * request_getData() 
 * Récupere la variable post, avec une sécurité htmlentities
 * @param $secure : Desactive la sécurité
 * @return bool
 **/
function request_getData($secure = true){
	if(isset($_POST) && !empty($_POST)){
		if($secure){
			$data = [];

			foreach($_POST as $key=>$value){
				$data[$key] = htmlentities($value);
			}

			return $data;
		}
		else
		{
			return $_POST;
		}
	}
}

/**
 * request_isPost() 
 * Définit si c'est une requête de type POST
 * @return bool
 **/
function request_isPost(){
	return isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST" ? true : false;
}