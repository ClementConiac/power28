<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 mb-5 mt-5 form-login">
            <div class="d-flex justify-content-center">
                <h3 class="form-login-title mb-5 pt-4 pb-2">Connexion</h3>
            </div>

            <form action="index.php?page=login" method="post" class="d-flex flex-column">

                <label for="email"></label>
                <input id="input-email" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="email" placeholder="E-mail">

                <label for="password"></label>
                <input id="input-password" class="mb-4 pt-1 pb-1 form-login-input" type="password" name="password" placeholder="Mot de passe">


                <div class="d-flex justify-content-end mb-4">
                    <button type="submit" value="submit" name="connection" class="btn mb-3" id="button-login">Valider</button>
                </div>
                <div class="d-flex justify-content-start">
                    <p>Vous n'avez pas de compte ? <a id="link-create" href="index.php?page=signin">Créer un compte</a></p>
                </div>

            </form>
        </div>
    </div>
</div>
