<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 mb-5 mt-5 form-login">
            <div class="d-flex justify-content-center">
                <h3 class="form-login-title mb-5 pt-4 pb-2">Inscription</h3>
            </div>

            <form action="index.php?page=signin" method="post" class="d-flex flex-column">

                <label for="name"></label>
                <input id="input-name" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="firstname" placeholder="Prénom">

                <label for="lastname"></label>
                <input id="input-lastname" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="lastname" placeholder="Nom">


                <label for="email"></label>
                <input id="input-email" class="mb-4 pt-1 pb-1 form-login-input" type="email" name="email" placeholder="E-mail">

                <label for="password"></label>
                <input id="input-password" class="mb-4 pt-1 pb-1 form-login-input" type="password" name="password" placeholder="Mot de passe">

                <label for="confirm-password"></label>
                <input id="input-confirm-password" class="mb-4 pt-1 pb-1 form-login-input" type="password" name="password_confirm" placeholder="Confirmation du mot de passe">

                <label for="society-name"></label>
                <input id="input-society-name" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="societyName" placeholder="Nom de la société">

                <label for="society-adress"></label>
                <input id="input-society-adress" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="societyAdress" placeholder="Adresse de la société">

                <label for="siret"></label>
                <input id="input-siret" class="mb-4 pt-1 pb-1 form-login-input" type="text" name="siret" placeholder="Siret">

                <label for="phone"></label>
                <input id="input-phone" class="mb-5 pt-1 pb-1 form-login-input" type="text" name="phone" placeholder="Téléphone">

                <div class="d-flex justify-content-end mb-4">
                    <button type="submit" name="register" value="submit" class="btn mb-3" id="button-login">Valider</button>
                </div>

            </form>
        </div>
    </div>
</div>

