<?php

/*********************************************************** 
 * Toutes les fonctions lier au templates                  *
 ***********************************************************/

/**
 * template_element($filename)
 *
 * charge un élement dans la page
 * @param $filename : nom de l'élémnt à charger
 **/
function template_element($filename){

	$path = basePath() .'views/elements/'.$filename.'.php';

	if(file_exists($path)){
		return include_once $path;
	}
	else
	{
		throw new Exception("L'élément $filename est introuvable dans le dossier \"$path\".");
	}

}