<?php

/*********************************************************** 
 * Inclut tous les fichiers général de l'application       *
 ***********************************************************/

require "path.php"; // Fonctions lier chemin d'accès des fichiers
require "request.php";
require "core.php"; // Fonctions du core de l'application
require "sessions.php"; // Démarrage de la sessions et fonctions lier au session
require "bdd.php"; // Fonctions lier à la base de données
require "globals.php"; // Contient toutes les fonctions lier au variable global php
require "templates.php"; //contient toutes les fonctions lier au templates

// SYSTEMES
require "Auth.php";

request_isPost();

