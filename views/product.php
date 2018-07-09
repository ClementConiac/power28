<div class="container-fluid">
    <div class="row pt-5 pb-5 mb-5 mt-4 d-flex justify-content-center" id="background-product">
        <div class="col-12 col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6">
            <p class="">
            Power28 est un logiciel de gestion de stock multi-secteur.
            Il permet de gérer et valoriser le stock d'une entreprise ainsi que réaliser un suivi des entrées et des sorties avec
            une granularité fine (détail de toutes les transactions).
            </p>
            <p class="">
            Les fonctionnalités de Power28 ont ensuite été étendues à tous types d'entreprises souhaitant connaître la valeur
            et le contenu de son stock et réaliser des entrées et sorties à l'aide de scan par QR-Code.
            </p>
            <p class="">
            Il permet entre autre de gérer les commandes auprès de vos fournisseurs pour optimiser votre processus de
            réapprovisionnement.
            La gestion des catégories, des fabricants, des fournisseurs, des lieux ainsi que son historique poussé font de
            Power28 un outil idéal pour gérer votre stock en toute sérénité, sans crainte de subir une rupture de stock ou de
            vendre un produit ou une denrée dont la date de péremption est dépassée.
            </p>
            <p class="">
            Power28 a été développé en prenant en compte l'expérience utilisateur et la productivité nécessaire à une
            entreprise moderne. Son utilisation est très simple et l'interface de ce logiciel de gestion de stock a été pensé
            pour fonctionner également sur iPad avec un lecteur QR Code Bluetooth.
            </p>
            <p class="">
            Pour la souplesse de développement ainsi que les facilités d'évolution, nous avons choisit de développer
            Power28 sur la plateforme de développement FileMaker ( <a class="link-text-product" href="http://www.filemaker.com/fr/">http://www.filemaker.com/fr/</a> ). Cela nous permet de
            répondre plus rapidement aux besoins des clients soucieux de maintenir un logiciel parfaitement à jour ou ceux
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row carousel-navigation d-flex justify-content-center">
            <div class="mb-5 col-8 d-flex flex-wrap justify-content-around">
                <?php foreach ($productCategory as $productCategories): ?>
                    <a class="pr-4 pl-4 mb-2 nav-product" id="" href="index.php?page=product&category_id=<?= $productCategories['id']?>"><?= $productCategories['name'] ?></a>
                <?php endforeach; ?>
            </div>
            <div class="col-10">
                <?php if (!empty($productCurrentCategory)): ?>
                <?php foreach ($productCurrentCategory as $productCurrentCategories) : ?>
                <div>
                    <img src="assets/img/screen/<?= $productCurrentCategories['name'] ?>" class="img-fluid">
                </div>

                <div class="mt-2 mb-5">
                    <p class="text-center">
                        <?= $productCurrentCategories['description'] ?>
                    </p>
                </div>

                    <?php endforeach; ?>
                    <?php else: ?>
                    <div class="d-flex justify-content-center">
                        Aucune information sur cette catégorie
                    </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>


