
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-10 col-md-6 col-lg-5 col-xl-4 mb-5 mt-5 form-login">
                <div class="d-flex justify-content-center">
                    <h3 class="form-login-title mb-5 pt-4 pb-2">Modifier le profil</h3>
                </div>

                <form action="index.php?page=profile" method="post" class="d-flex flex-column">

                    <label for="name"></label>
                    <input id="input-name" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['firstname']?>" type="text" name="firstname" placeholder="Prénom">

                    <label for="lastname"></label>
                    <input id="input-lastname" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['lastname']?>" type="text" name="lastname" placeholder="Nom">


                    <label for="email"></label>
                    <input id="input-email" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['email']?>" type="email" name="email" placeholder="E-mail">

                    <label for="email"></label>
                    <input id="input-society-name" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['society_name']?>" type="text" name="societyName" placeholder="Nom de la société">

                    <label for="email"></label>
                    <input id="input-society-adress" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['society_adress']?>" type="text" name="societyAdress" placeholder="Adresse de la société">

                    <label for="email"></label>
                    <input id="input-siret" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['siret']?>" type="text" name="siret" placeholder="Siret">

                    <label for="email"></label>
                    <input id="input-phone" class="mb-4 pt-1 pb-1 form-login-input" value="<?php echo $users['phone']?>" type="text" name="phone" placeholder="Téléphone">

                    <label for="password"></label>
                    <input id="input-password" class="mb-4 pt-1 pb-1 form-login-input" value="" type="password" name="password" placeholder="Mot de passe">

                    <label for="confirm-password"></label>
                    <input id="input-confirm-password" class="mb-5 pt-1 pb-1 form-login-input" value="" type="password" name="password_confirm" placeholder="Confirmation du mot de passe">

                    <div class="d-flex justify-content-end mb-4">
                        <button type="submit" name="update" value="submit" class="btn mb-3" id="button-login">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
