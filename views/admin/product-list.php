<div class="container-fluid">


    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des produits</h4>
                <a class="btn btn-primary" href="index.php?page=administration&admin=new-product">Ajouter un produit</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($productList): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($productList as $products): ?>

                        <tr>
                            <th><?php echo htmlentities($products['id']); ?></th>
                            <td><?php echo htmlentities($products['name']); ?></td>
                            <td><?php echo htmlentities($products['description']); ?></td>
                            <td><?php echo htmlentities($products['price']); ?></td>


                            <td>
                                <a href="index.php?page=administration&admin=modify-product&product_id=<?php echo $products['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?page=administration&admin=product&product_id=<?php echo $products['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php  else: ?>
                Aucun produit enregistré.
            <?php endif; ?>

        </section>

    </div>

</div>