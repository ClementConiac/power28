<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-10 my-5 d-flex flex-column">
            <table class="table table-striped">
                <thead>
                <tr id="table-name">
                    <th scope="col" class="pt-4 table-name-content">Id de transaction</th>
                    <th scope="col" class="pt-4 table-name-content">Votre id</th>
                    <th scope="col" class="pt-4 table-name-content">Date de création</th>
                    <th scope="col" class="pt-4 table-name-content">Montant</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($userOrder)): ?>
                    <?php foreach ($userOrder as $order): ?>
                        <tr>
                            <td class="table-content">
                                    <?= $order['id']?>

                            </td>
                            <td class="table-content">
                                <p>
                                    <?= $order['customer_id']?>
                                </p>
                            </td>
                            <td class="table-content">
                                <?= $order['created_at']?>
                            </td>
                            <td class="table-content">
                                <?= $order['amount']/100?>€
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <td class="table-content">
                        Vous n'avez aucun achat
                    </td>
                    <td class="table-content">
                        Vous n'avez aucun achat
                    </td>
                    <td class="table-content">
                        Vous n'avez aucun achat
                    </td>
                    <td class="table-content">
                        Vous n'avez aucun achat
                    </td>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>