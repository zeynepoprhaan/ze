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
  <!-- header section strats -->
  <header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="Anasayfa.php">
        <span>
          ZeZeBeauty
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item ">
            <a class="nav-link" href="Anasayfa.php">Anasayfa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Alışveriş.php">
              Alışveriş
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="NedenBiz.php">
              Neden Biz
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Referans.php">
              Referans
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="İletişim.php">iletişim</a>
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
          </a>
          <a href="Sepet.php">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
          <form class="form-inline ">
            <button class="btn nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>
   

 

 

