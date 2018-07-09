<div class="container-fluid">


    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des questions</h4>
                <a class="btn btn-primary" href="index.php?page=administration&admin=new-faq-question">Ajouter une question</a>
            </header>

            <?php if(isset($message)): ?>
                <div class="bg-success text-white p-2 mb-4">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if($faqQuestionAnswerList): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="">#</th>
                        <th>Question</th>
                        <th>Reponse</th>
                        <th>categorie id</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($faqQuestionAnswerList as $question_answer): ?>

                        <tr>
                            <th><?php echo htmlentities($question_answer['id']); ?></th>
                            <td><?php echo htmlentities($question_answer['question']); ?></td>
                            <td><?php echo htmlentities($question_answer['answer']); ?></td>
                            <td><?php echo htmlentities($question_answer['category_faq_id']); ?></td>
                            <td>
                                <a href="index.php?page=administration&admin=modify-faq-question&faq-question_id=<?php echo $question_answer['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                                <a onclick="return confirm('Are you sure?')" href="index.php?page=administration&admin=faq-question&faq-question_id=<?php echo $question_answer['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php  else: ?>
                Aucune question enregistré.
            <?php endif; ?>

        </section>

    </div>

</div>