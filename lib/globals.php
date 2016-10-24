<?php

/*********************************************************** 
 * Toutes les fonctions lier au variable global php        *
 ***********************************************************/

/**
 * url_params($key)
 * Récupere la valeur dans le params
 * @param $key : clé du tableaux
 * @return Array | false
 **/
function url_params($key){
	if(array_key_exists($key, $_GET)){
		return $_GET[$key];
	}
	else{
		return false;
	}
}