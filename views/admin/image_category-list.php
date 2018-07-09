<div class="container-fluid">


    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des categories d'image</h4>
                <a class="btn btn-primary" href="index.php?page=administration&admin=new-category-image">Ajouter une categorie d'image</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($categoryImageList): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categoryImageList as $categoriesImages): ?>

                        <tr>
                            <th><?php echo htmlentities($categoriesImages['id']); ?></th>
                            <td><?php echo htmlentities($categoriesImages['name']); ?></td>
                            <td><?php echo htmlentities($categoriesImages['description']); ?></td>
                            <td>
                                <a href="index.php?page=administration&admin=modify-category-image&image-category_id=<?php echo $categoriesImages['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?page=administration&admin=image-category&category-image_id=<?php echo $categoriesImages['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php  else: ?>
                Aucune categorie d'image enregistré.
            <?php endif; ?>

        </section>

    </div>

</div>
