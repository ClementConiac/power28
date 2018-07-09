<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 d-flex justify-content-around align-items-center mt-5 mb-5 pt-3 pb-3 navigation-forum" >
            <a href="#newMessage" class="button-new-message">Nouveau message</a>
            <a href="index.php?page=forum-subject" class="button-new-message">Nouveau sujet</a>
            <a href="#" onclick="previousPage()" class="button-new-message">Tout les sujets</a>
        </div>
    </div>
    <div class="row d-flex flex-column">

        <?php if(!empty($forumCurrentSubject)): ?>
            <?php foreach($forumCurrentSubject as $messages): ?>
                <div class="<?php if($messages['is_admin'] == 1 ): ?>message-content-admin<?php else: ?>message-content<?php endif; ?> d-flex flex-column justify-content-center mb-4 pl-5 pt-3">
                    <h5>
                        <?= $messages['firstname']?>
                        <?php if($messages['is_admin'] == 1 ): ?>[Admin]<?php else: ?><?= $messages['lastname']?><?php endif; ?>
                    </h5>
                    <h6>
                        <?= $messages['created_at']?>
                    </h6>
                    <p>
                        <?= $messages['content']?>


                    </p>
                    <div class="mb-2">
                        <?php if(!empty($_SESSION['is_admin'])):?>
                            <a onclick="return confirm('Vous êtes sur le point de supprimer un message. Continuez?')" href="index.php?page=forum-subject&forum-message_id=<?= $messages['id'] ?>&action=delete" class="btn btn-danger">Supprimer</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            Aucun message dans ce sujet.
        <?php endif; ?>
    </div>


    <div class="row mt-5 d-flex justify-content-center" id="newMessage">
        <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 mb-5 new-subject d-flex justify-content-center flex-column">
            <h3 class="mb-3 mt-2">Nouveau messsage</h3>
            <form action="index.php?page=forum-message" method="post">
                <div class="mt-4 d-flex justify-content-center flex-column">
                    <label for="content">Votre message :</label>
                    <textarea name="contentMessage" type="text" class="pt-1 pb-1 form-login-input" id="content" cols="40" rows="10" placeholder="Contenu du message"></textarea>
                </div>
                <input type="hidden" name="subjectId" value="<?= $messages['subject_id']?>">
                <?php if (isset($_SESSION['user'])): ?>
                    <div class="d-flex justify-content-end mb-4 mt-3">
                        <button type="submit" name="save" value="newMessage" class="btn mb-3" id="button-login">Poster le message</button>
                    </div>
                <?php else: ?>
                    <div class="d-flex justify-content-end mb-4 mt-3">
                        <a class="btn" id="button-login" href="index.php?page=login">Connexion</a>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>



