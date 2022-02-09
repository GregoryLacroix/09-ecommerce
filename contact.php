<?php 
require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>

    <h1 class="text-center my-5">Contactez-nous</h1>

    <h3 class="text-center mt-5">Téléphone</h3>
    <p class="text-center mb-5"><i class="bi bi-telephone-fill"></i> 0707070707</p>

    <div class="container d-flex justify-content-around zone-map-contact mb-5">
        <div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xl-5">
            <h4 class="text-center mb-3">Formulaire de contact</h4>
            <form action="" class="mb-5">
                <div class="mb-3">
                    <!-- <label for="nom" class="form-label">Nom</label> -->
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir votre nom">
                </div>
                <div class="mb-3">
                    <!-- <label for="prenom" class="form-label">Prénom</label> -->
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir votre prénom">
                </div>
                <div class="mb-3">
                    <!-- <label for="email" class="form-label">Email</label> -->
                    <input type="text" class="form-control" id="email" name="email" placeholder="Saisir votre Email">
                </div>
                <div class="mb-3">
                    <!-- <label for="sujet" class="form-label">Email</label> -->
                    <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Saisir votre Sujet">
                </div>
                <div class="mb-3">
                    <!-- <label for="sujet" class="form-label">Message</label> -->
                    <textarea type="text" class="form-control" id="sujet" rows="10" name="sujet" placeholder="Saisir votre message"></textarea>
                </div>
                <input type="submit" name="submit" value="Envoyer" class="btn btn-dark">
            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xl-5">
            <h4 class="text-center mb-3">Itinéraire</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.481979752887!2d1.676122915901275!3d48.791779113348284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6a3d9657f4105%3A0xdc93a0d3a10f593e!2s45%20Rue%20des%20Vieilles%20Tuileries%2C%2078950%20Gambais!5e0!3m2!1sfr!2sfr!4v1632831552613!5m2!1sfr!2sfr" height="470" style="border:0;" allowfullscreen="" loading="lazy" class="google-map"></iframe>
        </div>
    </div>

<?php 
require_once('inc/inc_front/footer.inc.php');     