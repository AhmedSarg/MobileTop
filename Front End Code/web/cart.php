<?php
include '../../Back End Code/config.php';
include '../../Back End Code/home.php';
include '../../Back End Code/cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mobile Top</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
            crossorigin="anonymous"
    />
    <!-- owl cursour -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <!-- font awsoum -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<!-- start #header                                             the bg-color are bootstrap class     -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark"
            >Welcome</a
            >
        </div>
    </div>
    <!-- primary-navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark color-secound-bg">
        <a class="navbar-brand" href="#">Mobile Top</a>
        <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Category</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>
            </ul>
            <!-- small cart  border-radius == bootstrap == border raduis   -->
            <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"
              ><i class="fas fa-shopping-cart"></i
                  ></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?= $countCart ?? 0; ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- end -primary-navbar -->
</header>
<!-- end #header -->

<!-- start #main-site -->
<main id="main-site">
    <!-- cart section -->
    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-size-20 font-rubik">Shopping cart</h5>
            <!-- shopping cart items -->
            <div class="row">
                <div class="col-sm-9">
                    <?php
                    if ($cartProducts != null) {
                        foreach ($cartProducts as $cartProduct) {
                            echo '
                <form method="post" action="">
                <div class="row border-2 py-3 mt-3">
                <input type="hidden" name="product_id" value="' . $cartProduct["id"] . '">
                <div class="col-sm-2">
                  <img
                    src="' . $cartProduct["picture"] . '"
                    alt="' . $cartProduct["model"] . '"
                    class="img-fluid"
                  />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20">' . $cartProduct["name"] . " " . $cartProduct["model"] . '</h5>
                  <small>by ' . $cartProduct["name"] . '</small>
                  <div class="d-flex">
                    <div class="rating text-warning font-size-12">';
                            for ($i = 0; $i < floor($cartProduct["rate"]); $i++) {
                                echo '<span><i class="fas fa-star"></i></span>';
                            }
                            for ($i = 0; $i < 5 - floor($cartProduct["rate"]); $i++) {
                                echo '<span><i class="far fa-star"></i></span>';
                            }
                            echo '</div>
                  </div>
                  <div class="qty d-flex pt-2">
                    <div class="d-flex font-rale w-25">
                      
                      <input
                        type="text"
                        name="quantity-in-cart' . '"
                        class="qty-input border px-2 w-50 bg-light"
                        value="' . $cartProduct["quantity"] . '"
                        data-id="' . $cartProduct["id"] . '"
                        placeholder="1"
                        readonly="readonly"
                      />
                    </div>
                    <button
                      type="submit" name="delete_cart"
                      class="btn font-rubik text-danger px-3 border-right"
                    >
                      Delete
                    </button>
                  </div>
                </div>
                <div class="col-sm-2 text-right">
                  <div class="font-size-20 text-danger font-rale">
                    <span class="prouduct_price">$' . $cartProduct["price"] . '</span>
                  </div>
                </div>
              </div>
              <hr />
              </form>
              ';
                        }
                    }
                    ?>

                </div>
                <div class="col-sm-3">
                    <div class="sub_total border text-center mt-2">
                        <h6 class="font-rubik font-size-12 text-success py-3">
                            <i class="fas fa-check"></i>your order is eligible for FREE
                            Delivery.
                        </h6>
                        <div class="border-top py-3">
                            <h5 class="font-rale font-size-20">
                                Subtotal (<?=$countCart?> item) :
                                <span class="deal_price text-danger">$<?= $sumCart ?></span>
                            </h5>
                            <button type="submit" class="btn btn-warning mt-3">
                                Proceed to buy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end shopping cart items -->
        </div>
    </section>
    <!-- end cart section -->

    <!-- top sale المنتجات الاولي -->
    <!-- ----------------------------------------------------------------------------------------------------------------- -->
    <section id="top-sale">
        <div class="container py-5">
            <!--  استخدمت كونتينر علشان اخليههم يجوا في النص ودده عن طريق البوتستراب -->
            <h4 class="font-rubik font-size-20">Top Sale</h4>
            <hr/>
            <!-- <the secound  images -- الي هما top-sale > -->
            <!-- owl carousel -->
            <div class="owl-carousel owl-theme">
                <!-- the five top salary -->
                <?php
                foreach ($topSaleProducts as $topSaleProduct) {
                    $discount = $topSaleProduct["discount"] * 100;
                    echo '
                    <form action="" method="post">
                    <input type="hidden" name="product_id" value="' . $topSaleProduct["id"] . '">
                     <div class="item py-2">
              <div class="product font-rale">
                <!-- المنتج الاول (class="img-fluid" ده علشان يخليها ربسبونسيف)-->
                <a href="product.php?id=' . $topSaleProduct["id"] . '" name="image">
                <img
                    src="' . $topSaleProduct["picture"] . '"
                    alt="product1"
                    class="img-fluid"
                />
                </a>
                <div class="text-center">
                  <h6 name ="product_name">' . $topSaleProduct["name"] . " " . $topSaleProduct["model"] . '</h6>
                  <div class="rating text-warning font-size-12">';
                    for ($i = 0; $i < floor($topSaleProduct["rate"]); $i++) {
                        echo '<span><i class="fas fa-star"></i></span>';
                    }
                    for ($i = 0; $i < 5 - floor($topSaleProduct["rate"]); $i++) {
                        echo '<span><i class="far fa-star"></i></span>';
                    }
                    echo '</div>
                  <div class="price py-2">
                    <span name="price" style="font-weight: bold">$' . $topSaleProduct["price"] . '</span>
                    <span name="discount" style="color: darkred; font-weight: bolder; margin-left: 50px">' . $discount . '%</span>
                  </div>
                  <button type="submit" name="add_cart_without_details" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>  
            </form>
                    ';
                }
                ?>
            </div>
            <!-- <end the secound  images -- الي هما top-sale > -->
        </div>
    </section>
    <!-- end top sale المنتجات الاولي -->
</main>
<!-- end #main-site -->

<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Top</h4>
                <p class="font-size-14 font-rale text-white-50">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Repellendus, deserunt.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Contact</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning mb-2">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >About Us</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Delivery Information</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Privacy Policy</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Terms & Conditions</a
                    >
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >My Account</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Order History</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Wish List</a
                    >
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1"
                    >Newslatters</a
                    >
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">
        &copy; Copyrights 2023. Desing By
        <a href="#" style="color: rgb(255, 208, 0)">Mobile Top</a>
    </p>
</div>
<!-- end #footer -->

<script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"
></script>
<!-- owl cursour js js file -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<!-- custom javascript -->
<script src="./index.js"></script>
<!-- isotope pluge cdn  -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
</body>
</html>
