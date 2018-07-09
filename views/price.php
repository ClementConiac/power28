<div class="container-fluid mt-4">
    <div class="row pt-5 pb-5 d-flex justify-content-center" id="background-price">
        <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6">
            <p class="">
                Logiciel vendu 1200€ H.T.
            </p>
            <p>
                (Licence FileMaker Pro non incluse, voir : <a class="link-text-price" href="http://store.filemaker.com/">http://store.filemaker.com/</a> )
            </p>
            <p>
                • Pour l'impression de vos étiquettes nous vous recommandons le modèle d'imprimante suivant :
                LabelWriter™ 450 (<a class="link-text-price" href="http://www.dymo.com/fr-FR/labelwriter-450-label-printer">http://www.dymo.com/fr-FR/labelwriter-450-label-printer</a>)
            </p>
            <p>
                • Ainsi que les étiquettes suivantes : Dymo 11352 [Return Address] (<a class="link-text-price" href="https://www.dymo.eu/dymo-11352-returnaddress-labels-25x54mm.html">https://www.dymo.eu/dymo-11352-returnaddress-labels-25x54mm.html</a> )
            </p>
            <p>
                • Pour vos scans QR code en bluetooth (iDevices : iPhone, iPad | Mac ou PC) nous vous recommandons le/les modèles suivants: Plusieurs marques sont compatibles.
            </p>
            <p>
                HoneyWell :
                <a class="link-text-price" href="https://country.honeywellaidc.com/fr-FR/Pages/Category.aspx?category=2d-barcodescanner&cat=HSM">
                    https://country.honeywellaidc.com/fr-FR/Pages/Category.aspx?category=2d-barcodescanner&
                    cat=HSM
                </a>
            </p>
            <p>
                Opticon :
                <a class="link-text-price" href="http://opticon.com/product/opi-3301i/">
                    http://opticon.com/product/opi-3301i/
                </a>
            </p>
            <p>
                Datalogic :
                <a class="link-text-price" href="https://www.datalogic.com/fra/produits/points-de-vente/lecteurs-manuels/rida-dbt6400-retailpd-714.html">
                    https://www.datalogic.com/fra/produits/points-de-vente
                    /lecteurs-manuels/rida-dbt6400-retailpd-714.html
                </a>
            </p>
            <p>Datalogic :
                <a class="link-text-price" href="https://www.datalogic.com/fra/produits/sante/lecteurs-manuels/rida-dbt6400-healthcarepd-715.html">
                    https://www.datalogic.com/fra/produits/sante/
                    lecteurs-manuels/rida-dbt6400-healthcarepd-715.html
                </a>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <form action="index.php?page=payement" method="post">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="price-information mb-5 mt-5 pb-3 col-10 col-sm-10 col-md-6 col-lg-5 col-xl-4 d-flex flex-column align-items-center justify-content-around pb-3">

                <div class="price-information-title pt-3">
                    <h3 class="">Power 28</h3>
                </div>

                <div class="price-information-price mt-3">
                    <!--<h4 class="text-center">€</h4>-->
                    <h6 class="text-center">Hors taxe</h6>
                </div>

                <div class="price-information-text pt-3">

                    <div class="">
                        <p class="d-flex align-items-center">
                            <i class="material-icons pr-2">check</i>
                            Licence unique par entreprise
                        </p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span id="minus-product" class="input-group-text icone-plus-minus">
                                    <button type="button" class="btn button-minus-product" value="1200">
                                        <i class="fa fa-minus-square-o"></i>
                                    </button>
                                </span>
                            </div>
                            <input type="text" name="productPrice" class="form-control text-center input-product" value="1200">
                            <div class="input-group-append">
                                <span id="plus-product" class="input-group-text icone-plus-minus">
                                    <button type="button" class="btn button-plus-product" value="1200">
                                        <i class="fa fa-plus-square-o"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="d-flex align-items-center">
                            <i class="material-icons pr-2">check</i>
                            Hébergement base de donnée *
                        </p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span id="minus-hosting" class="input-group-text icone-plus-minus">
                                    <button type="button" class="btn button-minus-hosting">
                                        <i class="fa fa-minus-square-o"></i>
                                    </button>
                                </span>
                            </div>
                            <input type="text" name="hostingPrice" class="form-control text-center input-hosting" value="600">
                            <div class="input-group-append">
                                <span id="plus-hosting" class="input-group-text icone-plus-minus">
                                    <button type="button" class="btn button-plus-hosting">
                                        <i class="fa fa-plus-square-o"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="d-flex align-items-center">
                            <i class="material-icons pr-2">check</i>
                            Utilisateurs illimités
                        </p>
                    </div>

                    <div>
                        <p class="d-flex align-items-center">
                            <i class="material-icons pr-2">check</i>
                            Formation collaborateurs possible
                        </p>
                    </div>
                </div>

                <div class="mt-4 pb-5 price-information-buttons">
                    <?php if (isset($_SESSION['user'])): ?>
                        <button id="button-price-buy" name="buy" type="submit" class="btn">Acheter</button>
                    <?php else: ?>
                        <a id="button-price-login" href="index.php?page=login">Connexion</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="price-information-text-ps col-10 col-sm-10 col-md-6 col-lg-5 col-xl-4">
                <p class="text-center">
                    * L'hébergement de votre base de donnée par nos serveur peut engendrer des frais supplémentaire.
                </p>
                <p class="text-center">
                    L'hébergement de la base de donnée dure 1 an , il est facturé chaque mois 50 €.
                </p>
            </div>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    var $buttonPlusProduct = $('.button-plus-product');
    var $buttonMinusProduct = $('.button-minus-product');
    var $inputProduct = $('.input-product');

    $buttonPlusProduct.click(function(){
        $inputProduct.val( parseInt($inputProduct.val()) + 1200 );
    });

    $buttonMinusProduct.click(function(){
        $inputProduct.val( parseInt($inputProduct.val()) - 1200 );
    });



    var $buttonPlusHosting = $('.button-plus-hosting');
    var $buttonMinusHosting = $('.button-minus-hosting');
    var $inputHosting = $('.input-hosting');

    $buttonPlusHosting.click(function(){
        $inputHosting.val( parseInt($inputHosting.val()) + 600 );
    });

    $buttonMinusHosting.click(function(){
        $inputHosting.val( parseInt($inputHosting.val()) - 600 );
    });
</script>
