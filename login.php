<?php
require "lib/includes.php";

if(request_isPost()){
	$data = request_getData();
	// on traite le formulaire

	if(isset($data['username']) && !empty($data['username'])){
		// On recherche l'utilisateur dans la base de données
		$user = bdd_prepare('SELECT * FROM users WHERE username = ? AND password = ? AND activated = 1', [
			$data['username'],
			auth_encryptPassword($data['password'])
		], true);

		// Si on trouve l'utilisateur alors on le connecte au site
		if($user){
			$_SESSION['auth'] = [
				'username' => $user->username,
				'mail' => $user->mail,
				'permission' => $user->permission
			];

			// On le redirige sur la page d'accueil
			session_setFlash('success', 'Vous êtes maintenant connecté.');
			redirect('index.php');
			die;
		}
	}

	// Message d'erreur
	session_setFlash('danger', "Votre nom d'utilisateur ou votre mot de passe sont incorrect.");
	redirect_referer();
}

loadTemplate("header.html");
loadView("users", "login.view.php");
loadTemplate("footer.html");