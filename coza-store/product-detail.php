<?php
include './src/php/database.php';
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sql = "select * from products inner join category on products.cate_id = category.cate_id where pro_id=$pro_id";
    $kq = $conn->query($sql)->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Detail</title>
    <link rel="stylesheet" href="./src/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="">
        <div>
            <header class="header">
                <div class="header_top">
                    <div class=" header-top-sp h-full">
                        <div class="sup-header-top">
                            <p>Website Designed by Pham Tuan</p>
                        </div>
                        <div class="list-header-top">
                            <a href="">Help & FAQs</a>
                            <a href="./src/php/login.php">My Account</a>
                            <a href="">EN</a>
                            <a href="">USD</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end header-top -->
                <nav id="nav" class="menu ">
                    <div class="sub-menu">
                        <div class="flex">
                            <div class="logo">
                                <a href=""><img src="./src/img/asset 0.webp" alt="" /></a>
                            </div>
                            <div class="list-menu">
                                <ul class="flex m-0">
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./product.php">Shop</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex list-icon-menu">
                            <div class="icon-menu">
                                <a href=""><i class="fa-solid fa-magnifying-glass"></i>
                                    <span></span>
                                </a>
                            </div>
                            <div class="icon-menu">
                                <a href=""><i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                            <div class="icon-menu">
                                <a href=""><i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- end menu -->
            </header>
            <div>
                <div class="product-detail">
                    <div class="category-list">
                        <a href="">Home<i class="fa-solid fa-angle-right"></i></a>
                        <a href=""><?php echo $kq['cate_name'] ?><i class="fa-solid fa-angle-right"></i></a>
                        <p>Lightweight Jacket</p>
                    </div>
                    <!-- end category list -->

                    <div class="pt-15">
                        <div class="detail">
                            <div class="all-img-detail">
                                <div class="sup-img-detail">
                                    <ul>

                                        <li><img src="./src/img/<?php echo $kq['sup_img1'] ?>" alt=""></li>
                                        <li><img src="./src/img/<?php echo $kq['sup_img2'] ?>" alt=""></li>
                                        <li><img src="./src/img/<?php echo $kq['sup_img3'] ?>" alt=""></li>
                                    </ul>
                                </div>
                                <div class="img-detail">
                                    <img src="./src/img/<?php echo $kq['image'] ?>" alt="">
                                    <a href=""><i class="fa-solid fa-up-right-and-down-left-from-center"></i></a>
                                    <div class="button-img-detail">
                                        <button><i class="fa-solid fa-angle-left"></i></button>
                                        <button><i class="fa-solid fa-angle-right"></i></button>
                                    </div>
                                </div>


                            </div>
                            <!--end all-img-detail-->
                            <div class="content-img-detail">
                                <h4><?php echo $kq['title'] ?></h4>
                                <span><?php echo $kq['price'] ?>$</span>
                                <p><?php echo $kq['intro'] ?></p>
                                <div class="all-choose">
                                    <div class="choose">
                                        <h5>Size</h5>
                                        <select name="" id="">
                                            <option value="">Choose an option</option>
                                            <option value="">Size S</option>
                                            <option value="">Size M</option>
                                            <option value="">Size L</option>
                                            <option value="">Size XL</option>
                                        </select>
                                    </div>
                                    <div class="choose">
                                        <h5>Color</h5>
                                        <select name="" id="">
                                            <option value="">Choose an option</option>
                                            <option value="">Red</option>
                                            <option value="">Blue</option>
                                            <option value="">White</option>
                                            <option value="">Grey</option>
                                        </select>
                                    </div>
                                    <div class="all-more-erase">
                                        <div class="more-erase">
                                            <div class="erase"><i class="fa-solid fa-minus"></i></div>
                                            <input type="text" value="1">
                                            <div class="more"><i class="fa-solid fa-plus"></i></div>
                                        </div>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                                <div class="list-icon-choose">
                                    <div class="list-icon-choose-a-first-child"><a data-tooltip="Add to Wishlist" href=""><i class="fa-solid fa-heart"></i></a></div>
                                    <a data-tooltip="Facebook" href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a data-tooltip="Tiwtter" href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a data-tooltip="Google Plus" href=""><i class="fa-brands fa-google-plus-g"></i></a>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- end detail-->
                </div>
                <!-- end product-detail  -->
                <div class="related-products mx-auto-300">
                    <div>
                        <ul>
                            <li><a href="">Description</a></li>
                            <li><a href="">Additional information</a></li>
                            <li><a href="">Reviews (1)</a></li>
                        </ul>
                        <div class="content-related-product">
                            <p><?php echo $kq['detail'] ?></p>
                            <!-- <p>Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit
                                amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus
                                interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et
                                elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu
                                velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec
                                iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat,
                                purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus
                                rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.</p> -->
                        </div>
                    </div>
                </div>
                <!-- end Related products -->
            </div>
            <!-- end  -->
            <div class="sku-cate">
                <span>SKU: JAK-01</span><span>Categories: Jacket, Men</span>
            </div>
            <!--  -->
            <div class="related">
                <div class="title-related">
                    <h2>Related Products</h2>
                </div>
                <div class="next-product">
                    <button class="button-left"><i class="fa-solid fa-angle-left"></i></button>
                    <div class="mt-13 mb-4 list-product">
                       
                        <div class="product">
                            <div class="img-product"><img src="./src/img/asset 8.webp" alt="">
                                <a href="">Quick View</a>
                            </div>
                            <div class="title-list-product">
                                <div class="sup-title-list-product"><a href="./product-detail.html">Esprit Ruffle
                                        Shirt</a>
                                    <span>$16.64</span>
                                </div>
                                <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="product">
                            <div class="img-product"><img src="./src/img/asset 11.webp" alt="">
                                <a href="">Quick View</a>
                            </div>
                            <div class="title-list-product">
                                <div class="sup-title-list-product"><a href="./product-detail.html">
                                        Herschel supply</a>
                                    <span>$35.31</span>
                                </div>
                                <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="product">
                            <div class="img-product"><img src="./src/img/asset 12.webp" alt="">
                                <a href="">Quick View</a>
                            </div>
                            <div class="title-list-product">
                                <div class="sup-title-list-product"><a href="./product-detail.html">
                                        Only Check Trouser</a>
                                    <span>$25.50</span>
                                </div>
                                <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            </div>
                        </div>
                        <!-- end product -->
                        <div class="product">
                            <div class="img-product"><img src="./src/img/asset 13.webp" alt="">
                                <a href="">Quick View</a>
                            </div>
                            <div class="title-list-product">
                                <div class="sup-title-list-product"><a href="./product-detail.html">
                                        Classic Trench Coat</a>
                                    <span>$75.00</span>
                                </div>
                                <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            </div>
                        </div>
                        <!-- end product -->
                    </div>
                    <button class="button-right"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <!--  -->

            <footer>
                <div class="mx-auto-300">
                    <div class="footer-top">
                        <div class="categories-footer-top">
                            <h4>CATEGORIES</h4>
                            <ul>
                                <li><a href="">Women</a></li>
                                <li><a href="">Men</a></li>
                                <li><a href="">Shoes</a></li>
                                <li><a href="">Watches</a></li>
                            </ul>
                        </div>
                        <div class="help-footer-top">
                            <h4>HELP</h4>
                            <ul>
                                <li><a href="">Track Order</a></li>
                                <li><a href="">Returns</a></li>
                                <li><a href="">Shipping</a></li>
                                <li><a href="">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="getintouch-footer-top">
                            <h4>GET IN TOUCH</h4>
                            <p>Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or
                                call us on (+1)
                                96 716 6879
                            </p>
                            <div>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="newsletter-footer-top">
                            <h4>NEWSLETTER</h4>
                            <form>
                                <div class="input-newsletter-footer-top"><input type="text" placeholder="email@example.com">
                                    <span></span>
                                </div>
                                <div class="button-newsletter-footer-top"><button>Subscribe</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-buttom">
                        <ul>
                            <li><a href=""><img src="./src/img/asset 26.webp" alt=""></a></li>
                            <li><a href=""><img src="./src/img/asset 27.webp" alt=""></a></li>
                            <li><a href=""><img src="./src/img/asset 28.webp" alt=""></a></li>
                            <li><a href=""><img src="./src/img/asset 29.webp" alt=""></a></li>
                            <li><a href=""><img src="./src/img/asset 30.webp" alt=""></a></li>
                        </ul>

                        <p>Copyright ©2022 All rights reserved | This template is made with <i class="fa-regular fa-heart"></i> by
                            <a href="https://colorlib.com/">Colorlib</a>
                        </p>
                    </div>
                </div>
                <div class="end">
                    <a href="#"><i class="fa-solid fa-angles-up"></i></a>
                </div>
            </footer>
            <!-- end footer -->
        </div>
    </div>
    <script>
        "use strict";

        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);

        // scroll header
        window.addEventListener('scroll', () => {
            const sub_menu = $('.sub-menu');
            const menu = $('.menu');

            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                menu.style.backgroundColor = '#ffffff';
                menu.style.top = "0";
                sub_menu.style.padding = '19px 0';
                menu.style.transition = "all .2s linear";
            } else {
                menu.style.top = "40px";
                menu.style.backgroundColor = 'transparent';
                sub_menu.style.padding = '23px 0';
            }

        });
    </script>
    <script src="./src/js/main.js"></script>
</body>

</html>