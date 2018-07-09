<div class="container-fluid">

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-3">

                <h4><?php if(isset($image)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un screen</h4>
            </header>

            <?php if(isset($message)):  ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>



            <form action="index.php?page=administration&admin=new-image" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Description :</label>
                    <input class="form-control" <?php if(isset($image)): ?>value="<?php echo $image['question']?>"<?php endif; ?> type="text" placeholder="Description" name="description" id="description" />
                </div>
                <div class="form-group">
                    <label for="name">Image :</label>
                    <input class="form-control" <?php if(isset($image)): ?>value="<?php echo $image['answer']?>"<?php endif; ?> type="file" placeholder="Image" name="image" id="image" />
                </div>
                <div class="form-group">
                    <label for="categories"> Catégorie :</label>
                    <select class="form-control" name="categoriesScreen" id="categories">

                        <?php
                        $queryCategory= $db ->query('SELECT * FROM category_screen');
                        $categoryScreens = $queryCategory->fetchAll();
                        ?>

                        <?php foreach($categoryScreens as $key => $categoryScreen) : ?>

                            <?php
                            $selected = '';

                            foreach ($images as $screen) {
                                if($categoryScreen['id'] == $screen['category_id']){
                                    $selected = 'selected="selected"';
                                }
                            }
                            ?>
                            <option value="<?php echo $categoryScreen['id']; ?>" <?php echo $selected; ?>> <?php echo $categoryScreen['name']; ?> </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="text-right">

                    <?php if(isset($image)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />

                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="add_image" value="Enregistrer" />
                    <?php endif; ?>
                </div>


                <?php if(isset($image)): ?>
                    <input type="hidden" name="id" value="<?php echo $image['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>

</div>
