<?php
	require "lib/includes.php";
	
	/**********************
	 * Déconnecte du site *
	 **********************/
	unset($_SESSION['auth']);

	session_setFlash('success', "Vous avez été déconnecté du site.");
	redirect('index.php');