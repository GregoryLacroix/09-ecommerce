<?php 
require_once('inc/init.inc.php');

// echo '<pre>'; print_r($_SESSION); echo '</pre>';

// Si l'indice 'user' n'est pas définit dans la session (!connect()), cela veut dire que l'internaute n'est pas authentifié sur le site, il n'a rien à faire sur la page profil, on le redirige (header()) vers la page connexion.php
if(!connect())
{
    header('location: connexion.php');
}

require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>

<h1 class="text-center my-5">Vos informations personnelles</h1>

<!-- Exo: afficher l'ensemble des données de l'utilisateur sur la page Web en passant par le fichier le fichier session de l'utilisateur ($_SESSION). Ne pas afficher afficher l'id_membre sur la page Web -->

<div class="col-5 mx-auto card mb-5 shadow-sm">
    <div class="card-body">
    <?php 
    //      ARRAY           id_membre     3
    foreach($_SESSION['user'] as $key => $value): // remplace {

        if($key != 'id_membre' && $key != 'statut'):
    ?>
        <p class="d-flex justify-content-between">
            <!-- ucfirst() : fonction prédéfinie permettant de mettre la première de la chaine de caractères en majuscule -->
            <strong><?php echo ucfirst($key); ?></strong>
            <span><?= $value; ?></span>
        </p>
    <?php 
        endif;

    endforeach; // remplace }
    ?>
    </div>
</div>

<?php 
require_once('inc/inc_front/footer.inc.php');
