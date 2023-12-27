<?php
include '../../Back End Code/product.php';
echo $error;
if ($error) {
    header('Location: error.php');
}
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
<!-- start #header                  the bg-color are bootstrap class     -->
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
                    <a class="nav-link" href="#">Home</a>
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
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
            <!-- small cart  border-radius == bootstrap == border raduis   -->
            <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"
              ><i class="fas fa-shopping-cart"></i
                  ></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                </a>
            </form>
        </div>
    </nav>
    <!-- end -primary-navbar -->
</header>
<!-- end #header -->

<!-- start #main-site -->
<main id="main-site">
    <!-- product -->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img
                            src="<?= $product["picture"] ?>"
                            alt="<?= $product["name"] . ' ' . $product["model"] ?>"
                            class="img-fluid"
                    />
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">
                                Proceed to Buy
                            </button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-warning form-control">
                                Add to card
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?= $product["model"] ?></h5>
                    <small>by <?= $product["name"] ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <!-- <a href="#" class="px-2 font-rale font-size-14">20 534 rating | 1000+ answered quections</a> -->
                    </div>
                    <hr class="m-0"/>
                    <!-- product price -->
                    <table class="font-rale font-size-14 my-3">
                        <tr>
                            <td>M.R.P.</td>
                            <td><strike><?= $product["discount"] * 100 ?>%</strike></td>
                        </tr>
                        <tr>
                            <td>Deal Price:</td>
                            <td class="font-size-20 text-danger">
                                $<?= $product["price"] ?><small class="text-dark font-size-12"
                                ><!--&nbsp;&nbsp;-->
                                    inclusive of all taxes</small
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>You Save:</td>
                            <td class="font-size-20 text-danger">$<?= $product["discount"] * $product["price"] ?></td>
                        </tr>
                    </table>
                    <!-- product price -->
                    <!-- #policy -->
                    <!-- replace anchor to pragragh -->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2">
                      <span
                              class="fas fa-retweet border p-3 rounded-pill color-secound"
                      ></span>
                                </div>
                                <a href="#" class="font-rale font-size-12"
                                >10 Days <br/>
                                    Replacement</a
                                >
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2">
                      <span
                              class="fas fa-truck border p-3 rounded-pill color-secound"
                      ></span>
                                </div>
                                <a href="#" class="font-rale font-size-12"
                                >Daily Tuition <br/>
                                    Deliverd</a
                                >
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2">
                      <span
                              class="fas fa-check-double border p-3 rounded-pill color-secound"
                      ></span>
                                </div>
                                <a href="#" class="font-rale font-size-12"
                                >1 Year <br/>
                                    Warently</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- #policy -->
                    <hr/>
                    <!-- order-details  -->
                    <div
                            id="order-details"
                            class="font-rale d-flex flex-column text-dark"
                    >
                        <small>Delivery by:Mar29 - Apr 1</small>
                        <small
                        >Sold by <a href="#">Daily Electronics</a> (<?= $product["rate"] ?> out of 5)</small
                        >
                        <small
                        ><i class="fas fa-map-marker-alt color-primary"></i
                            >&nbsp;&nbsp;Deliver to customer-424201</small
                        >
                    </div>
                    <!-- order-details  -->
                    <div class="row">
                        <div class="col-6">
                            <!-- color -->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6
                                            class="font-baloo"
                                            style="display: flex; align-items: center"
                                    >
                                        Color:
                                    </h6>
                                    <div class="p-2 color-yellow-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="p-2 color-primary-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="p-2 color-secound-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                </div>
                            </div>
                            <!-- color -->
                        </div>
                        <div class="col-6">
                            <!-- product qty section -->
                            <div class="color my-4">
                                <!-- نسال اسامه فيها -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro">
                                            <i class="fas fa-angle-up"></i>
                                        </button>
                                        <input
                                                type="text"
                                                class="qty-input border px-2 w-50 bg-light"
                                                value="1"
                                                data-id="pro"
                                                placeholder="1"
                                                disabled
                                        />
                                        <button class="qty-down border bg-light" data-id="pro">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- product qty section -->
                        </div>
                    </div>
                    <!-- size -->
                    <div class="size my-3">
                        <h6 class="font-baloo">Size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">6GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                        </div>
                    </div>
                    <!-- size -->
                </div>
<!--                <div class="col">-->
<!--                    <h6 class="font-rubik">Product Descriptions</h6>-->
<!--                    <hr/>-->
<!--                    <p class="font-rale .font-size-14">-->
<!--                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi,-->
<!--                        debitis cum. Asperiores atque commodi, vero, blanditiis quos aut-->
<!--                        necessitatibus odit laudantium libero labore repellat voluptates-->
<!--                        doloremque dolor sit, recusandae voluptatum.-->
<!--                    </p>-->
<!--                    <p class="font-rale .font-size-14">-->
<!--                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi,-->
<!--                        debitis cum. Asperiores atque commodi, vero, blanditiis quos aut-->
<!--                        necessitatibus odit laudantium libero labore repellat voluptates-->
<!--                        doloremque dolor sit, recusandae voluptatum.-->
<!--                    </p>-->
<!--                </div>-->
            </div>
        </div>
    </section>
    <!-- product -->
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
//                    echo ;
                    echo '
                     <div class="item py-2">
              <div class="product font-rale">
                <!-- المنتج الاول (class="img-fluid" ده علشان يخليها ربسبونسيف)-->
                <a href="#" name="image">
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
                  <button type="submit" name="add_cart" class="btn btn-warning font-size-12">
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>  
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
