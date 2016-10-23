<?php

/************************************************************* 
 * Contients toutes les fonctions lié au chemin des fichiers *
 *************************************************************/

/**
 * basePath : permet d'indiquer le chemin racine de l'application
 * @return : chemin racine
 **/
function basePath(){
	$path = dirname(__DIR__).'/';

	// Conversion des backslashe en slashe
	$path = str_replace('\\', '/', $path);
	return $path;
}

/**
 * configPath : permet d'indiquer le chemin du dossier config
 * @return : chemin du dossier config
 **/
function configPath(){
	return basePath().'config/';
}

/**
 * templatePath : permet d'indiquer le chemin du dossier template
 * @return : chemin du dossier template
 **/
function templatePath(){
	return basePath().'templates/';
}