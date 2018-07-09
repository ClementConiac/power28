<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 mb-5 mt-5 form-login">
            <div class="d-flex justify-content-center">
                <h3 class="form-login-title mb-5 pt-4 pb-2">Contact</h3>
            </div>
            <form action="index.php?page=contact" method="post" class="d-flex flex-column">

                <label for="lastname"></label>
                <input id="input-lastname" name="contactLastname" class="mb-4 pt-1 pb-1 form-login-input" type="text" placeholder="Nom">

                <label for="firstname"></label>
                <input id="input-firstname" name="contactFirstname" class="mb-4 pt-1 pb-1 form-login-input" type="text" placeholder="Prénom">

                <label for="email"></label>
                <input id="input-email" name="contactEmail" class="mb-4 pt-1 pb-1 form-login-input" type="text" placeholder="E-mail">

                <label for="subject"></label>
                <input id="input-subject" name="contactSubject" class="mb-4 pt-1 pb-1 form-login-input" type="text" placeholder="Sujet de votre demande">

                <label for="content"></label>
                <textarea name="contactContent" type="text" class="mb-5 pt-1 pb-1 form-login-input" id="content" cols="30" rows="10" placeholder="Contenu du message"></textarea>

                <div class="form-group pb-3">
                    <label class="select-demo" for="select-demo"> Voulez vous une démonstration gratuite ?</label>
                    <select class="form-control" name="contactDemo" id="select-demo">
                        <option value="1" selected>Oui</option>
                        <option value="0" selected>Non</option>

                    </select>
                </div>

                <div class="d-flex justify-content-end mb-4">
                    <button type="submit" name="contactSend" value="submit" class="btn mb-3" id="button-login">Envoyer</button>
                </div>

            </form>
        </div>
    </div>
</div>