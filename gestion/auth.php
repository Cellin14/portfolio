<?php
session_start();
function est_connecte(): bool { return !empty($_SESSION['connecte']); }
function exiger_connexion(): void { if (!est_connecte()) { header('Location: connexion.php'); exit; } }
