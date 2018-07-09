<div class="container-fluid">

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-3">

                <h4><?php if(isset($questions)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une categorie</h4>
            </header>

            <?php if(isset($message)):  ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>



            <form action="index.php?page=administration&admin=new-faq-question" method="post">
                <div class="form-group">
                    <label for="name">Question :</label>
                    <input class="form-control" <?php if(isset($questions)): ?>value="<?php echo $questions['question']?>"<?php endif; ?> type="text" placeholder="Question" name="question" id="question" />
                </div>
                <div class="form-group">
                    <label for="name">Réponse :</label>
                    <input class="form-control" <?php if(isset($questions)): ?>value="<?php echo $questions['answer']?>"<?php endif; ?> type="text" placeholder="Réponse" name="answer" id="answer" />
                </div>
                <div class="form-group">
                    <label for="categories"> Catégorie </label>
                    <select class="form-control" name="categories" id="categories">

                        <?php foreach($faqCategoryList as $key => $categoryFaq) : ?>

                            <?php
                            $selected = '';

                            foreach ($faqQuestionAnswerList as $questionFaq) {
                                if($categoryFaq['id'] == $questionFaq['category_id']){
                                    $selected = 'selected="selected"';
                                }
                            }
                            ?>
                            <option value="<?php echo $categoryFaq['id']; ?>" <?php echo $selected; ?>> <?php echo $categoryFaq['name']; ?> </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="text-right">

                    <?php if(isset($questions)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />

                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>


                <?php if(isset($questions)): ?>
                    <input type="hidden" name="id" value="<?php echo $questions['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>

</div>
