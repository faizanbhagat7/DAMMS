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

<style>


table , tr , td ,th{


  color:white;
  border: 1px solid white;
  text-align: center;
 padding:10px;
 font-size:30px;

font-family: apple-system,BlinkMacSystemFont,Segoe UI,Roboto, Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
font-size:30px;
font-weight:900;
text-shadow:  0px 0px 80px black;

}
table{
  width:100%;
  border-collapse: collapse;
  border: 1px solid transparent;
}

img{
  border-radius: 20%;
  box-shadow: 0px 0px 10px #000;
}
</style>

</head>

<body>


<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare("SELECT * FROM collections");
$statement->execute();
$collections = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0" style="text-shadow:0px 0px 10px yellow;"><a href="homepage.php">DAMMS<span>.</span></a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="homepage.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="admin-collections.php">My collections</a></li>
          <!-- <li><a class="nav-link scrollto" href="edit-colletion.php">Create collection</a></li> -->
          <li><a class="nav-link scrollto " href="manageusers.php">Manage Users</a></li>
          
          </li>
          

          <li><a class="nav-link scrollto" href="../login/adminlogin.php">
          <?php
          
              session_abort();
          ?>
            Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!--<a href="#about" class="get-started-btn scrollto">Get Started</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos= "fade-in" data-aos-duration="10000">
<!-- 
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Collections<span>.</span></h1>
          <br/>
         
        </div>
      </div> -->



      <!-- main info  -->

     
      <table align='center'>

      <tr>

      </tr>

      <tr>      
      <!-- <th>ID</th> -->
      <th>LOGO</th>
      <th>COLLECTION NAME</th>
      <th>OPTION</th>

      </tr>

      <?php foreach ($collections as $c) { ?>
      <tr>
      <!-- <td><?php echo $c['cid']  ?></td> -->
      <td>

      <img src="assets/img/<?php echo $c['cid'];?>.gif" width="100px" height="100px">

      </td>
      <td><?php echo $c['collection-name']; ?></td>
      
      <td>
      <?php
      


      ?>
     
      <a href="<?php echo $c['cid']; ?>.php"> <input type="button" value="Edit"  class = "btn btn-primary btn-lg" >  </a>
      
      </td>

    </tr>
    <?php } ?>
      
     </table>





  </section><!-- End Hero -->

  

  

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