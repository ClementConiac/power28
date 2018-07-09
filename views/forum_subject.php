<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 d-flex justify-content-around align-items-center mt-5 mb-5 pt-3 pb-3 navigation-forum" >
            <a href="#newSubject" class="button-new-message">Nouveau sujet</a>
            <div class="input-group" id="search-form-forum">
                <input type="text" class="form-control"  placeholder="Rechercher un sujet" aria-label="" aria-describedby="basic-addon1">
                <div class="input-group-append pl-3">
                    <button class="btn" id="button-search-form" type="button">Love it</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <table class="table table-striped">
            <thead>
            <tr id="table-name">
                <th scope="col" class="pt-4 table-name-content">Sujet</th>
                <th scope="col" class="pt-4 table-name-content">Auteur</th>
                <th scope="col" class="pt-4 table-name-content">Date de création</th>
                <?php if(!empty($_SESSION['is_admin'])):?>
                    <th scope="col" class="pt-4 table-name-content-categories">Action</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($forumCurrentCategory)): ?>
                <?php foreach($forumCurrentCategory as $subject): ?>
                    <tr>
                        <td class="table-content">
                            <a class="tab-content-categories" href="index.php?page=forum-message&subject_id=<?= $subject['id'] ?>">
                                <?= $subject['name']?>
                            </a>
                        </td>
                        <td class="table-content">
                            <p>
                                <?= $subject['firstname']?>
                                <?= $subject['lastname']?>
                            </p>
                        </td>
                        <td class="table-content">
                            <?= $subject['created_at']?>
                        </td>
                        <?php if(!empty($_SESSION['is_admin'])):?>
                            <td class="table-content">
                                <a onclick="return confirm('Vous êtes sur le point de supprimer un sujet et tous les messages dedans. Continuez?')" href="index.php?page=forum-subject&forum-subject_id=<?= $subject['id'] ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <td class="table-content">
                    Aucun sujet dans cette catégorie
                </td>
                <td class="table-content">
                    Aucun information
                </td>
                <td class="table-content">
                    Aucun information
                </td>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="row mt-5 d-flex justify-content-center" id="newSubject">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5 new-subject d-flex justify-content-center flex-column">
            <h3 class="mb-3 mt-2">Nouveau sujet</h3>
            <form action="index.php?page=forum-subject" method="post">
                <p>Nom du sujet :</p>
                <div class="input-group">
                    <input type="text" class="form-control" name="nameSubject" placeholder="Nom du sujet" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="mt-4">
                    <label for="content">Question de votre sujet :</label>
                    <textarea name="contentSubject" type="text" class="pt-1 pb-1 form-login-input" id="content" cols="40" rows="10" placeholder="Contenu du message"></textarea>
                </div>

                <div class="form-group mt-3">
                    <label for="categories"> Catégorie :</label>
                    <select class="form-control" name="categoriesSubject" id="categories">
                        <?php foreach($forumCategory as $key => $categoryForum) : ?>
                            <option value="<?php echo $categoryForum['id']; ?>"> <?php echo $categoryForum['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php if (isset($_SESSION['user'])): ?>
                    <div class="d-flex justify-content-end mb-4">
                        <button type="submit" name="save" value="newSubject" class="btn mb-3" id="button-login">Créer le sujet</button>
                    </div>
                <?php else: ?>
                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn" id="button-login" href="index.php?page=login">Connexion</a>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
