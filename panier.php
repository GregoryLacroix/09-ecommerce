<?php 
require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>

    <h1 class="text-center my-5">Votre panier</h1>

    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mx-auto d-flex justify-content-center shadow-sm px-0">
        <div class="col-md-2 bg-white p-2">
            <a href="fiche_produit.html"><img src="assets/img/tee-shirt1.jpg" alt="produit 1" class="img-panier"></a>
        </div>
        <div class="col-md-6 bg-white d-flex flex-column justify-content-center p-2">
            <h4><a href="fiche_produit.html" class="alert-link text-dark titre-produit-panier">Tee-shirt h/f</a></h4>
            <p class="text-success fw-bold fst-italic">En stock !</p>
            <p>Quantité : 1</p>
            <p class="mb-0"><a href="" class="alert-link text-dark liens-supp-produit-panier">Supprimer</a></p>
        </div>
        <div class="col-md-4 bg-white d-flex justify-content-end align-items-center p-2">
            <p class="fw-bold mb-0">47.90€</p>
        </div>
    </div>
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mx-auto d-flex justify-content-center shadow-sm px-0 mt-2">
        <div class="col-md-2 bg-white p-2">
            <a href="fiche_produit.html"><img src="assets/img/tee-shirt2.jpg" alt="produit 1" class="img-panier"></a>
        </div>
        <div class="col-md-6 bg-white d-flex flex-column justify-content-center p-2">
            <h4><a href="fiche_produit.html" class="alert-link text-dark titre-produit-panier">Tee-shirt noir</a></h4>
            <p class="text-success fw-bold fst-italic">En stock !</p>
            <p>Quantité : 3</p>
            <p class="mb-0"><a href="" class="alert-link text-dark liens-supp-produit-panier">Supprimer</a></p>
        </div>
        <div class="col-md-4 bg-white d-flex justify-content-end align-items-center p-2">
            <p class="fw-bold mb-0">19.99€</p>
        </div>
    </div>
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mx-auto d-flex justify-content-center shadow-sm px-0 mt-2">
        <div class="col-md-2 bg-white p-2">
            <a href="fiche_produit.html"><img src="assets/img/tee-shirt3.jpg" alt="produit 1" class="img-panier"></a>
        </div>
        <div class="col-md-6 bg-white d-flex flex-column justify-content-center p-2">
            <h4><a href="fiche_produit.html" class="alert-link text-dark titre-produit-panier">Tee-shirt violet</a></h4>
            <p class="text-danger fw-bold fst-italic">Plus que 9 exemplaire(s) disponible !</p>
            <p>Quantité : 2</p>
            <p class="mb-0"><a href="" class="alert-link text-dark liens-supp-produit-panier">Supprimer</a></p>
        </div>
        <div class="col-md-4 bg-white d-flex justify-content-end align-items-center p-2">
            <p class="fw-bold mb-0">15.90€</p>
        </div>
    </div>
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 d-flex justify-content-end align-items-center shadow-sm px-0 py-3 bg-white mt-2 mb-3">
        <h5 class="m-0 px-2 fw-bold">Sous total (3 articles) : 170.99€</h5>
    </div>
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p-0 text-end mb-5">
        <a href="" class="btn btn-dark">FINALISER LA COMMANDE</a>
    </div>

<?php 
require_once('inc/inc_front/header.inc.php');      