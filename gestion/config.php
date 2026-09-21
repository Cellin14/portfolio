<?php
$host=getenv('DB_HOST') ?: 'localhost'; $utilisateur=getenv('DB_USER') ?: ''; $mot_de_passe=getenv('DB_PASSWORD') ?: ''; $base=getenv('DB_NAME') ?: 'gestion_employes';
$connexion=new mysqli($host,$utilisateur,$mot_de_passe,$base);
if($connexion->connect_error) die('Erreur de connexion à la base de données.');
$connexion->set_charset('utf8mb4');
$identifiant_admin=getenv('ADMIN_USERNAME') ?: '';
$mot_de_passe_admin=getenv('ADMIN_PASSWORD') ?: '';
if($identifiant_admin==='' || $mot_de_passe_admin==='') die('Configuration serveur incomplète.');
