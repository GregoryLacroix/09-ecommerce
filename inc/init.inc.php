<?php 
// CONNEXION BDD
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
]);

// SESSION
session_start();

// CHEMIN / CONSTANTE 
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/PHP-wf3-1098/09-ecommerce/');

// $_SERVER['DOCUMENT_ROOT']  --> C:/xampp/htdocs/
// RACINE_SITE --> C:/xampp/htdocs/PHP-wf3-1098/09-ecommerce/
// echo RACINE_SITE . '<hr>';

// cette constente retourne le chemin physique di dossier 09-ecommerce sur le serveur 
// contexte : lors de l'enregistrement d'image produit sur le serveur, nous aurons besoin de définir le chemin complet dans lequel doit être enregistrée la photo sur le serveur

define("URL", "http://localhost/PHP-wf3-1098/09-ecommerce/");

// Cette constante définit l'adresse http de notre site ecommerce sur le serveur
// Cette constante servira, entre autres, à enregistrer et à définir l'URL d'une image produit qui sera stockée en BDD 
// ex : http://localhost/PHP-wf3-1098/09-ecommerce/asset/img/tee-shirt1.jpg

// FAILLES XSS
// On passe en revue les données d'un formulaire et on execute la fonction htmlentities() sur chaque valeur saisie dans le formulaire
foreach($_POST as $key => $value)
{
    $_POST[$key] = htmlentities($value);
}

// On passe en revue les données transimse dans l'URL et on execute la fonction htmlentities() sur chaque données dans l'url
foreach($_GET as $key => $value)
{
    $_GET[$key] = htmlentities($value);
}

// INCLUSIONS
// On inclue le fichier fonctions.inc.php dans init, comme ça à chaque inclusion de init.inc.php sur chaque page, nous faisons dans le même temps appel aux fonctions déclarées
require_once('fonctions.inc.php');



