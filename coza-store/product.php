<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                  <li><a class="text-blue" href="./product.php">Shop</a></li>
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
      
      <div class="pb-35 mt-30 pt-6">
        <div class="title-product">
          <div class="list-title-product">
            <div class="sup-list-title-product"><button>All Product</button>
              <button>Women</button>
              <button>Men</button>
              <button>Bag</button>
              <button>Shoes</button>
              <button>Watches</button>
            </div>
            <div class="icon-list-title-product">
              <div><button><i class="fa-solid fa-filter"></i>Filter</button></div>
              <div><button><i class="fa-solid fa-magnifying-glass"></i>Search</button></div>
            </div>
          </div>
        </div>
        <!-- end title-product -->
        <div class="list-product">
        <?php
          include './src/php/database.php';
          $sql = 'select * from products';
          $kq = $conn->query($sql);


          foreach ($kq as $key => $row) {
          ?>
            <div class="product">
              <div class="img-product"><img src="./src/img/<?php echo $row['image'] ?>" alt="">
                <a href="">Quick View</a>
              </div>
              <div class="title-list-product">
                <div class="sup-title-list-product"><a href="./product-detail.php?pro_id=<?php echo $row['pro_id'] ?>"><?php echo $row['title'] ?></a>
                  <span><?php echo $row['price'] ?>$</span>
                </div>
                <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
              </div>
            </div>
            <!-- end product -->
          <?php
          }; ?>
          <!--  -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 8.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="./product-detail.php">Esprit Ruffle Shirt</a>
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
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 14.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Front Pocket Jumper</a>
                <span>$34.75</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 15.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Vintage Inspired Classic</a>
                <span>$93.20</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 16.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Shirt in Stretch Cotton</a>
                <span>$52.66</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 17.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Pieces Metallic Printed</a>
                <span>$18.96</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 18.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Converse All Star Hi Plimsolls</a>
                <span>$75.00</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 19.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Femme T-Shirt In Stripe</a>
                <span>$25.85</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 20.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Herschel supply</a>
                <span>$63.16</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
          <div class="product">
            <div class="img-product"><img src="./src/img/asset 21.webp" alt="">
              <a href="">Quick View</a>
            </div>
            <div class="title-list-product">
              <div class="sup-title-list-product"><a href="">
                  Herschel supply</a>
                <span>$63.15</span>
              </div>
              <div class=""><a href=""><i class="fa-regular fa-heart"></i></a></div>
            </div>
          </div>
          <!-- end product -->
        </div>
        <!-- end list-product -->
        <div class="new-list-product"><a href="">Load More</a></div>

      </div>
      <!-- end product overview -->
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
              <p>Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1)
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
        <div  class="end">
        <a href="#"><i class="fa-solid fa-angles-up"></i></a></div>
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