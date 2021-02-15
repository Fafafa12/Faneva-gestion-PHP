<?php


require ('Vues/vues_etudiant.php');
require ('Models/connexion.php');
require ('Controlers/controlers_etudiant.php');
$formulaire_etudiant = new vues_etudiant;
$recup_info = new controlers_etudiant;

$formulaire_etudiant->afficher_etudiant();
$recup_info->recuperer_info();







?>