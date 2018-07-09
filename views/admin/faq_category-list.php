
<div class="container-fluid">


    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

<section class="col-9">
    <header class="pb-4 d-flex justify-content-between">
        <h4>Liste des catégories</h4>
        <a class="btn btn-primary" href="index.php?page=administration&admin=new-faq-category">Ajouter une catégorie</a>
    </header>

    <?php if(isset($message)): ?>
        <div class="bg-success text-white p-2 mb-4">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <?php if($faqCategoryList): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($faqCategoryList as $categories): ?>

                <tr>
                    <th><?php echo htmlentities($categories['id']); ?></th>
                    <td><?php echo htmlentities($categories['name']); ?></td>

                    <td>
                        <a href="index.php?page=administration&admin=modify-faq-category&faq-category_id=<?php echo $categories['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                        <a onclick="return confirm('Are you sure?')" href="index.php?page=administration&admin=faq-category&faq-category_id=<?php echo $categories['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
    <?php  else: ?>
        Aucune categorie enregistré.
    <?php endif; ?>

</section>

</div>

</div>