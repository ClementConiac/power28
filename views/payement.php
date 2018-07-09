<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <form action="index.php?page=charge" method="post" id="payment-form">
                <?php if (isset($total)): ?>
                    <h2 class="text-center my-4">Vous devez payer <?= $_SESSION['total'] ?>€</h2>
                <?php endif; ?>
                <div class="form-row">
                    <input type="text" name="firstName" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Prénom">
                    <input type="text" name="lastName" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Nom">
                    <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
                    <div id="card-element"  class="form-control">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <button id="button-payement" name="product" type="submit" class="btn btn-warning btn-block mt-4 mb-5">Submit Payment</button>
            </form>
        </div>
    </div>
</div>





