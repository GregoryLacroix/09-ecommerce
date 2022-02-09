<?php 
require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>

    <h1 class="text-center my-5">Détails de l'article</h1>

    <div class="row mb-5">
        <div class="bg-white shadow-sm rounded d-flex zone-card-fiche-produit">

            <a href="assets/img/tee-shirt1.jpg" data-lightbox="tee-shirt1" data-title="tee-shirt1" data-alt="tee-shirt1" class=""><img src="assets/img/tee-shirt1.jpg" class="img-produit-fiche" alt="..."></a>

            <div class="col-12 col-sm-12 col-md-12 col-lg-9 card-body d-flex flex-column justify-content-center zone-card-body">
                <h5 class="card-title text-center fw-bold my-3">Tee-shirt noir</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis incidunt magnam similique odio facilis aut debitis temporibus assumenda quam, mollitia, reiciendis accusamus reprehenderit ratione neque non deserunt asperiores doloribus fugit voluptatum nostrum nesciunt quidem repudiandae at harum. Saepe optio minus voluptatibus, accusantium inventore repudiandae eaque obcaecati cupiditate, non a dolorum accusamus iste pariatur consectetur, cumque totam. Eaque quod ut eveniet harum, numquam animi nisi reiciendis neque aliquid ratione. Facere ratione, culpa debitis doloremque sequi et deserunt reprehenderit quisquam itaque voluptates provident, officia aliquid aliquam accusantium corporis dolorem sint nam doloribus tenetur similique? Adipisci dicta similique a molestiae.</p>
                <p class="card-text fw-bold">Taille : S, M, L, XL</p>
                <p class="card-text fw-bold">Couleur : noir</p>
                <p class="card-text fw-bold">9.99€</p>
                <p class="card-text">
                    <form action="panier.html" class="row g-3">
                        <div class="col-12 col-sm-7 col-md-4 col-lg-3 col-xl-3">
                            <label class="visually-hidden" for="autoSizingSelect">Quantité</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>Choisir une quantité...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <input type="submit" class="btn btn-dark" value="Ajouter au panier">
                        </div>
                    </form>
                </p>
            </div>
        </div>
        <p class="mt-1"><a href="" class="text-dark alert-link"><i class="bi bi-arrow-left-circle-fill"></i> Retour à la boutique</a></p>
    </div>

<?php 
require_once('inc/inc_front/header.inc.php'); 