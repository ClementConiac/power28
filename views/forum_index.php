<div class="container">
    <div class="row d-flex justify-content-center mt-5 mb-5">
        <table class="table table-striped">
            <thead>
            <tr id="table-name">
                <th scope="col" class="pt-4 table-name-content-categories">Category</th>
                <?php if(!empty($_SESSION['is_admin'])):?>
                    <th scope="col" class="pt-4 table-name-content-categories">Action</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php foreach ($forumCategory as $categories): ?>
            <tr>
                <td class="table-content">
                    <a class="tab-content-categories" name="<?=$categories['id']?>" href="index.php?page=forum-subject&category_id=<?=$categories['id']?>">
                        <?= $categories['name'] ?>
                    </a>
                </td>
                <?php if(!empty($_SESSION['is_admin'])):?>
                    <td>
                        <a onclick="return confirm('Vous êtes sur le point de supprimer une catégorie et tous les sujets/messages dedans. Continuez?')" href="index.php?page=forum&forum-category_id=<?=$categories['id']?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</div>
