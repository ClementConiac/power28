<div class="container-fluid">

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-3">

                <h4><?php if(isset($user)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un utilisateur</h4>
            </header>

            <?php if(isset($message)):  ?>
                <div class="bg-danger text-white">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>



            <form action="index.php?page=administration&admin=new-user" method="post">
                <div class="form-group">
                    <label for="firstname">Prénom :</label>
                    <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['firstname']?>"<?php endif; ?> type="text" placeholder="Prénom" name="firstname" id="firstname" />
                </div>
                <div class="form-group">
                    <label for="lastname">Nom de famille : </label>
                    <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['lastname']?>"<?php endif; ?> type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['email']?>"<?php endif; ?> type="email" placeholder="Email" name="email" id="email" />
                </div>
                <div class="form-group">
                    <label for="password">Password <?php if(isset($user)): ?>(uniquement si vous souhaitez modifier le mot de passe actuel) <?php endif; ?>: </label>
                    <input class="form-control" type="password" placeholder="Mot de passe" name="password" id="password" />
                </div>
                <div class="form-group">
                    <label for="is_admin"> Admin ?</label>
                    <select class="form-control" name="is_admin" id="is_admin">
                        <option value="0" <?php if(isset($user) && $user['is_admin'] == 0): ?>selected<?php endif; ?>>Non</option>
                        <option value="1" <?php if(isset($user) && $user['is_admin'] == 1): ?>selected<?php endif; ?>>Oui</option>
                    </select>
                </div>

                <div class="text-right">

                    <?php if(isset($user)): ?>
                        <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />

                    <?php else: ?>
                        <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
                    <?php endif; ?>
                </div>


                <?php if(isset($user)): ?>
                    <input type="hidden" name="id" value="<?php echo $user['id']?>" />
                <?php endif; ?>

            </form>
        </section>
    </div>

</div>
