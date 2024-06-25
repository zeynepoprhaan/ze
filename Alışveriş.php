<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    ZeZeBeauty
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="Anasayfa.php">
          <span>ZeZeBeauty</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Anasayfa.php">Anasayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Alışveriş.php">Alışveriş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="NedenBiz.php">Neden Biz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Referans.php">Referans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="İletişim.php">İletişim</a>
            </li>
          </ul>
          <div class="user_option">
            <?php
              session_start();
              if (isset($_SESSION['username'])) {
                  echo '<span>Hoş geldin '  . $_SESSION['username'] .  '</span>';
                  echo '<a href="">   </a>';
                  echo '<a href="cikis.php">  Çıkış Yap </a>';
              } else {
                  echo '<a href="index.php"><i class="fa fa-user" aria-hidden="true"></i><span>Giriş</span></a>';
                  echo '<a href="uyeol.php"><i class="fa fa-user" aria-hidden="true"></i><span>Üye Ol</span></a>';
              }
              ?>
            <a href="Sepet.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <span id="cart-count">0</span>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Ürünler</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Allık.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Kiko</h6>
                <h6>
                  Allık
                  <span>$200</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="1" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/fentyconsealer.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Consealer</h6>
                <h6>
                  Fenty
                  <span>$300</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="2" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Clinique.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Contur</h6>
                <h6>
                  Clinique
                  <span>$110</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="3" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/huda pudra.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Pudra</h6>
                <h6>
                  Huda
                  <span>$45</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="4" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/fentyglos.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Gloss</h6>
                <h6>
                  Fenty
                  <span>$95</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="5" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/macdudakkalemi.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Dudak Kalemi</h6>
                <h6>
                  Mac
                  <span>$70</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="6" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/maskara2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Maskara</h6>
                <h6>
                  Kiko
                  <span>$400</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="7" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/giosu.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>Dudak Yağı</h6>
                <h6>
                  Giosu
                  <span>$450</span>
                </h6>
              </div>
              <div class="new">
                <span>Yeni</span>
              </div>
            </a>
            <button data-product-id="8" class="btn btn-primary add-to-cart">Sepete Ekle</button>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Tümünü Göster
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>Hakkımızda</h6>
            <p>Fransa’da 1969’da Dominique Mandonnaud tarafından kuruldu.</p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form">
              <h5>Bülten</h5>
              <form action="#">
                <input type="email" placeholder=" e-mailinizi giriniz">
                <button>Onayla</button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>YARDIM EKİBİ</h6>
            <p>Güncel stok ve indirimlerimiz ile bir numaralı kozmetik bayisiyiz</p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>BİZE ULAŞIN</h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> 12.sk 6.cd manolya </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+90 547 369 4560</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> Kozmozey@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
      
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const cartCount = document.getElementById('cart-count');
      const addToCartButtons = document.querySelectorAll('.add-to-cart');

      addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
          const productId = this.getAttribute('data-product-id');
          const productName = this.parentNode.querySelector('.detail-box h6').innerText;
          const productPrice = this.parentNode.querySelector('.detail-box span').innerText;

          let cart = JSON.parse(localStorage.getItem('cart')) || [];

          const product = { id: productId, name: productName, price: productPrice };

          cart.push(product);
          localStorage.setItem('cart', JSON.stringify(cart));

          cartCount.innerText = cart.length;
          alert(`${productName} sepete eklendi!`);
        });
      });

      
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      cartCount.innerText = cart.length;
    });
  </script>

</body>

</html>
