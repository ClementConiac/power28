<div class="container-fluid">

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-3">

                <h4><?php if(isset($categories)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une categorie d'image</h4>
            </header>

            <?php if(isset($message)):  ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>



            <form action="index.php?page=administration&admin=new-category-image" method="post">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input class="form-control" <?php if(isset($categories)): ?>value="<?php echo $categories['name']?>"<?php endif; ?> type="text" placeholder="Nom de la catégorie" name="categoryName" id="name" />
                </div>
                <div class="form-group">
                    <label for="name">Description :</label>
                    <input class="form-control" <?php if(isset($categories)): ?>value="<?php echo $categories['description']?>"<?php endif; ?> type="text" placeholder="Description" name="categoryDescription" id="description" />
                </div>

                <div class="text-right">

                    <?php if(isset($categories)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />

                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>


                <?php if(isset($categories)): ?>
                    <input type="hidden" name="id" value="<?php echo $categories['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>

</div>