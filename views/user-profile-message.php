<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 my-5 d-flex flex-column">
            <?php if(!empty($userMessages)): ?>
            <?php foreach ($userMessages as $message): ?>
                <div class="<?php if($message['is_admin'] == 1 ): ?>message-content-admin<?php else: ?>message-content<?php endif; ?> d-flex flex-column justify-content-center mb-4 pl-5 pt-3">
                    <h5>
                        <?= $message['firstname']?>
                        <?php if($message['is_admin'] == 1 ): ?>[Admin]<?php else: ?><?= $message['lastname']?><?php endif; ?>
                    </h5>
                    <h6>
                        <?= $message['created_at']?>
                    </h6>
                    <p>
                        <?= $message['content']?>
                    </p>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>Vous n'avez poster aucun message dans le forum</p>
            <?php endif; ?>
        </div>
    </div>
</div>