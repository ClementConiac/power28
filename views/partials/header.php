<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mt-3 d-flex justify-content-around">
        <a class="navbar-brand col-5 col-sm-4 col-md-2 col-lg-3 col-xl-3" href="index.php?page=home">
            <img src="assets/img/usefull/logo-power28-header" class="img-fluid" alt="Responsive image">
        </a>
        <button class="navbar-toggler col-5 col-sm-2 col-md-2" type="button" data-toggle="collapse" data-target="#link-header" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="link-header">
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=home">Accueil</a>
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=product">Produit</a>
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=price">Tarifs</a>
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=faq">FAQ</a>
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=forum">Forum</a>
                <a class="nav-item nav-link nav-header d-flex justify-content-center" href="index.php?page=contact">Contact</a>
            </div>


        <?php if (isset($_SESSION['user'])): ?>
            <div class="col-6 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class=""><?php echo $_SESSION['user']; ?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item mt-2" href="index.php?page=profile">Modifier le profile</a>
                        <a class="dropdown-item mt-2" href="index.php?page=profile-message&user_id=<?= $_SESSION['id'] ?>">Message publier</a>
                        <a class="dropdown-item mt-2" href="index.php?page=profile-order&user_id=<?= $_SESSION['id'] ?>">Gestion commande</a>

                        <?php if ($_SESSION['is_admin'] == 1) :?>
                            <a class="dropdown-item btn text-center mt-2" id="button-admin" href="index.php?page=administration&admin=admin">Administration</a>
                        <?php endif; ?>
                        <a class="dropdown-item btn text-center mt-2 mb-2" id="button-delete" href="index.php?logout">Déconnexion</a>
                    </div>
                </div>

                <div>
                    <?php else: ?>
                        <a class="btn" id="button-login-reg" href="index.php?page=login">Connexion/Inscription</a>
                    <?php endif; ?>
                </div>
            </div>
    </nav>
</div>



