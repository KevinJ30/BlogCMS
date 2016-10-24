<?php

/************************************************************ 
 * Contients toutes les fonctions lier a l'authentification *
 ************************************************************/

/**
 * isConnected : détermine si l'utilisateur et connecté
 * @return bool
 **/
function auth_isConnected(){
	if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
		return true;
	}
	
	return false;
}

/**
 * auth_authorized : autorise ou non l'accès à la page
 * @param $permission : Niveaux d'accès requis
 * @return bool
 **/
function auth_authorized($permission){
	if(auth_isConnected()){
		
		// Permission Membre
		if(!empty($_SESSION['auth']['permission']) && ($_SESSION['auth']['permission'] == $permission || $_SESSION['auth']['permission'] == "admin")){
			return;
		}

	}

	session_setFlash('danger', "Vous n'avez les droit suffisant pour accèder à cette page.<br />Il vous faut la permission <strong>$permission</strong> pour accèder à cette page.");
	redirect('login.php');
	die;
}

/**
 * auth_encryptPassword($password)
 *
 * Encrypte le mot de passe en sha1
 * @param string $password : mot de passe à encrypté
 * @return string : mot de passe encrypté
 *
 **/
function auth_encryptPassword($password){
	return sha1($password);
}