<div class="container-fluid">
    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des screens</h4>
                <a class="btn btn-primary" href="index.php?page=administration&admin=new-image">Ajouter un screen</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($images): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($images as $image): ?>

                        <tr>
                            <th><?php echo htmlentities($image['id']); ?></th>
                            <td><?php echo htmlentities($image['name']); ?></td>
                            <td><?php echo htmlentities($image['description']); ?></td>
                            <td><?php echo htmlentities($image['category_id']); ?></td>
                            <td>
                                <a onclick="return confirm('Are you sure?')" href="index.php?page=administration&admin=image&image_id=<?php echo $image['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>


                    </tbody>
                </table>
            <?php else: ?>
                Aucun screen enregistré.
            <?php endif; ?>
        </section>

    </div>

</div>
