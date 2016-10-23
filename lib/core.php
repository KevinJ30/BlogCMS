<?php

/*********************************************************** 
 * Contients toutes les fonctions du core de l'application *
 ***********************************************************/


/**
 * loadConfig : Permet de charger un fichier de configuration
 * ----------------------------------------------------------
 *
 * @param $file : chemin vers le fichier de config
 * @return Object : retourne un objet du contenu du fichier config
 **/
function loadConfig($file){
	$path = configPath().$file;

	// Si le fichier de config a été trouvé, on décode le json et on le retourne sous forme d'objet
	if(file_exists($path)){

		$json_str = file_get_contents($path);

		// Si un problèmes survient lors du décodage du fichier json
		if(!$json_str){
			throw new Exception("Le fichier n'a pu êtres décodé");
			die();
		}

		return json_decode($json_str);

	}
	else // Sinon 
	{
		throw new Exception("Le fichier de configuration n'a pu êtres trouvé !");
		die();
	}

}

/**
 * loadView : Permet de charger une vue
 * ----------------------------------------------------------
 *
 * @param $module : nom du module
 * @param $name : nom de la vue
 * @return void : inclut la page de vue
 **/
function loadView($module, $name){

}