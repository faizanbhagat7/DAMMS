<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DAMMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0" style="text-shadow:0px 0px 10px yellow;"><a href="index.php">DAMMS<span>.</span></a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="wallet/wallet.php">Wallet</a></li>
          <li><a class="nav-link scrollto" href="collections.php">Latest Collections</a></li>
          <li><a class="nav-link scrollto " href="purchasedassets.php">Purchased Assets</a></li>
          
          </li>
          <li><a class="nav-link scrollto" href="returnasset/returnasset.php">Return Asset</a></li>
          </li>

          <li><a class="nav-link scrollto" href="../login/login.php">
          <?php
              

              session_abort();
          ?>
            Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Digital Asset Marketplace<span>.</span></h1>
          <br/>
          <h2>Welcome to the NFT World</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4" style="cursor: pointer;">
          <div class="icon-box">
            <!-- <i class="ri-store-line"></i> -->
            <img src="assets/img/classic.gif" width="130px" style="border-radius: 300px;box-shadow:0px 0px 10px white;">
            <h3><a href="4.php" style="text-shadow: 0px 0px 10px red;">Classic wallpaper assets</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4"style="cursor: pointer;">
          <div class="icon-box">
            <!-- <i class="ri-bar-chart-box-line"></i> -->
            <img src="assets/img/bayc.gif" width="130px" style="border-radius: 300px; box-shadow:0px 0px 10px white;">
            <h3><a href="2.php" style="text-shadow: 0px 0px 10px aqua;">Bored Ape Yatch Club assets</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" style="cursor: pointer;">
          <div class="icon-box">
            <!-- <i class="ri-calendar-todo-line"></i> -->
            <img src="assets/img/logo.gif" style="border-radius: 300px; box-shadow:0px 0px 10px white;">
            <h3><a href="1.php" style="text-shadow: 0px 0px 10px blue;">Face Cones assets</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4" style="cursor: pointer;">
          <div class="icon-box">
            <!-- <i class="ri-paint-brush-line"></i> -->
            <img src="assets/img/invisible.gif" width="130px" style="border-radius: 300px; box-shadow:0px 0px 10px white;">
            <h3><a href="3.php" style="text-shadow: 0px 0px 10px yellow;">Invisible Friends assets</a></h3>
          </div>
        </div>
        
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/nft.jpeg" class="img-fluid" alt="" height="800px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>NFT (Non-Fungible tokens)</h3>
            <p class="fst-italic">
             NFT's are non fungible tokens, which are tokens that are not fungible.
              They and their value are not transferable.
              These are based on web 3.0 , which is a blockchain technology and is used to store and manage digital assets in a decentralized way.
              We can also use NFT's to create a decentralized marketplace.
<br><br/><b>
But We took the concept of this decentralized web 3.0 space assets and created a marketplace for NFT's which is completely based on Web 2.0 and is not on the Blockchain and is centralized and can be interupted by Admin or any User.
</b>

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/feature.jpeg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <!-- <i class="bx bx-receipt"></i> -->
              <h4>Classic Collection</h4>
              <p>Classic Collection consists of classic , aesthetic and unique NFTs.
This includes Natural , Art , Craft , and other unique NFTs.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <!-- <i class="bx bx-cube-alt"></i> -->
              <h4>Bored Ape Yatch Club Collection </h4>
              <p>The Bored Ape Yacht Club is a collection of 10,000 unique Bored Ape NFTs— unique digital collectibles living on the Ethereum blockchain. Your Bored Ape doubles as your Yacht Club membership card, and grants access to members-only benefits, the first of which is access to THE BATHROOM, a collaborative graffiti board. </p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <!-- <i class="bx bx-images"></i> -->
              <h4>Face Cones Collection</h4>  
              <p> FaceCones is a hundreds of unique characters who look like the people
          living in the world right now. It's all because they've got similar
          interests, life stories, and cultural identities.
              </p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <!-- <i class="bx bx-shield"></i> -->
              <h4>Invisible friends Collection</h4>
              <p>Invisible Friends is a collection of animated invisible characters by Bhagat Faizan.

Invisible Friends is a Random Character Collective project.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>