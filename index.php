<?php
require 'inc/head.php';

/*/ si à l'ouverture de la session il n'y a pas d'ajout dans le panier, alors le panier est un tableau vide
if (!isset($_SESSION['totalCookies'])){
    $_SESSION['totalCookies'] = [];
    $_SESSION['totalCookies'][46] = 0;
    $_SESSION['totalCookies'][36] = 0;
    $_SESSION['totalCookies'][58] = 0;
    $_SESSION['totalCookies'][32] = 0;
}*/

//si tu ajoutes un cookie, tu le rajoutes dans le panier sinon il n'y a rien dans le panier
if (isset($_GET['add_to_cart'])){

    /*/si je rajoute la card cookie 46, elle est rajoutée dans le panier session un cookie 46
    if ($_GET['add_to_cart'] == 46)
    {
        $_SESSION['totalCookies'][$_GET['add_to_cart']] +=1;
    }
    if ($_GET['add_to_cart'] == 36)
    {
        $_SESSION['totalCookies'][$_GET['add_to_cart']] +=1;
    }
    if ($_GET['add_to_cart'] == 58)
    {
        $_SESSION['totalCookies'][$_GET['add_to_cart']] +=1;
    }
    if ($_GET['add_to_cart'] == 32)
    {
        $_SESSION['totalCookies'][$_GET['add_to_cart']] +=1;
    }
    */

    if(!isset($_SESSION['totalCookies'][$_GET['add_to_cart']])) {
        $_SESSION['totalCookies'][$_GET['add_to_cart']] = 0;
    }

    $_SESSION['totalCookies'][$_GET['add_to_cart']] += 1;

    header('Location:/');

}

?>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=46" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=36" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=58" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=32" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <?php require 'inc/foot.php'; ?>

