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

	redirect('login.php');
}