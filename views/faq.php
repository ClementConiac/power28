<div class="container">
    <div class="row d-flex justify-content-center">
        <h2 class="pt-4 pb-4">Les réponses à vos questions</h2>
    </div>
    <div class="row d-flex flex-column justify-content-center">
        <div id="accordion">
            <?php foreach($faqCategories as $key => $category): ?>
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-center mb-3">
                        <h5 class="mb-0">
                            <button class="btn btn-link d-flex" id="button-collapse-faq" data-toggle="collapse" data-target="#category<?= $category['id']?>" aria-expanded="true">
                                <?php echo $category['name']; ?>
                                <i class="material-icons">expand_more</i>
                            </button>
                        </h5>
                    </div>
                    <div id="category<?= $category['id']?>" class="collapse" data-parent="#question">
                        <?php foreach ($faqQuestionsAnswers as $key => $question): ?>
                            <?php if ($question['category_faq_id'] == $category['id']): ?>
                                <div class="card-body">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header d-flex flex-column align-items-center" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link d-flex" id="button-collapse-faq" data-toggle="collapse" data-target="#question<?= $question['id']?>" aria-expanded="true" aria-controls="collapseOne">
                                                        <?php echo $question['question']; ?>
                                                        <i class="material-icons">expand_more</i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="question<?= $question['id']?>" class="collapse" aria-labelledby="headingOne" data-parent="#answer">
                                                <div class="card-body">
                                                    <p><?php echo $question['answer']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



</div>










