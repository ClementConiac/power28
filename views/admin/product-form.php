<div class="container-fluid">

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-3">

                <h4><?php if(isset($product)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un produit</h4>
            </header>

            <?php if(isset($message)):  ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            <form action="index.php?page=administration&admin=new-product" method="post">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input class="form-control" <?php if(isset($product)): ?>value="<?php echo $product['name']?>"<?php endif; ?> type="text" placeholder="Prénom" name="name" id="name" />
                </div>
                <div class="form-group">
                    <label for="name">Description :</label>
                    <input class="form-control" <?php if(isset($product)): ?>value="<?php echo $product['description']?>"<?php endif; ?> type="text" placeholder="Description" name="description" id="description" />
                </div>
                <div class="form-group">
                    <label for="name">Prix :</label>
                    <input class="form-control" <?php if(isset($product)): ?>value="<?php echo $product['price']?>"<?php endif; ?> type="number" step="0.01" placeholder="Prix" name="price" id="price" />
                </div>
                <div class="text-right">

                    <?php if(isset($product)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>
                <?php if(isset($product)): ?>
                    <input type="hidden" name="id" value="<?php echo $product['id']?>" />
                <?php endif; ?>
            </form>
        </section>
    </div>

</div>


