            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0" aria-label="Eighth navbar example">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="assets/img/boutique.gif" alt="logo-gif" class="logo-gif"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="-index.php"><i class="bi bi-house-fill"></i></a>
                            </li>

                            <!-- accès aux internaute authentifié sur le site -->
                            <?php if(connect()): ?>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="profil.php">Votre compte</a>
                                </li>

                            <?php else: ?>

                                <!-- accès aux visiteurs lambda, non authentifié sur le site -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="inscription.php">Créer votre compte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="connexion.php">Identifiez-vous</a>
                                </li>

                            <?php endif; ?>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="boutique.php">Boutique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="panier.php">Panier <span class="badge bg-success">3</span></a>
                            </li>

                            <?php if(adminConnect()): ?>

                                <!-- accès au menu déroulant seulement pour les administrateurs du site, donc valeur 'admin' pour le statut dans la BDD -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">BACKOFFICE</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown07">

                                        <li><a class="dropdown-item" href="admin/gestion_boutique.php">Gestion boutique</a></li>

                                        <li><a class="dropdown-item" href="admin/gestion_commandes.php">Gestion commandes</a></li>

                                        <li><a class="dropdown-item" href="admin/gestion_users.php">Gestion users</a></li>
                                        
                                    </ul>
                                </li>

                            <?php endif; ?>


                        </ul>
                        <!-- <form>
                        <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
                        </form> -->

                        
                        <!-- Si l'indice 'user' est définit, cela veut dire l'internaute est passé par la page connexion et est authentifié sur le site, alors on entre dans le IF -->
                        <?php if(connect()): ?>
                        
                            <span class='fst-italic'>
                                <a href='profil.php' class='text-white link-profil' title='Accès à votre compte'>Hello <?= $_SESSION['user']['prenom'] ?> <?= $_SESSION['user']['nom'] ?> !</a>
                            </span>

                            <a href="connexion.php?action=deconnexion" class="btn btn-success ms-3">Deconnexion</a>
                        
                        <?php endif; ?>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/slider3.jpg" class="d-block w-100" alt="slider 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider4.jpg" class="d-block w-100" alt="slider 4">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider1.jpg" class="d-block w-100" alt="slider 1">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <main class="container zone-main">