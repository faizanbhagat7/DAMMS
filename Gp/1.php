<!-- Face Cones  -->
<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare("SELECT * FROM facecones where owner = NULL");
$statement->execute();
$collections = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Face Cones</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="collectionsedit.css" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div
        class="container d-flex align-items-center justify-content-lg-between"
      >
        <h1
          class="logo me-auto me-lg-0"
          style="text-shadow: 0px 0px 10px yellow"
        >
          <a href="index.php">DAMMS<span>.</span></a>
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="index.php">Home</a></li>
            <li>
              <a class="nav-link scrollto" href="collections.php"
                >Latest Collections</a
              >
            </li>

            <li>
              <a class="nav-link scrollto" href="purchasedassets.php"
                >Purchased Assets</a
              >
            </li>

            
           
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->


    <!--  -->

    <section class="collections1">
      <!--logo  -->
      <div class="logo">
        <img src="assets/img/logo.gif" alt="" />
      </div>

      <!-- info    -->
      <div class="info1">
        <div class="name">
          <h1>Face Cones</h1>
        </div>

        <div class="desc">
          FaceCones is a hundreds of unique characters who look like the people
          living in the world right now. It's all because they've got similar
          interests, life stories, and cultural identities.
        </div>
      </div>

      <div class="collection-container"  >
       
      <h1 class="name"> NFT's</h1>
      <h2 align="center" class="name" style="font-size: 80px;">  
         <?php 
      $statement = $pdo->prepare("SELECT * FROM facecones  where `owner` IS NULL 
      order by date desc ");
      $statement->execute();
      $collections = $statement->fetchAll(PDO::FETCH_ASSOC);
      echo  count($collections);

      ?> </h2>

      </div>

      
    </section>

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>


<!--  desc over-->

<!-- main info -->

<div class="maincontainer">


<div class="container">
 
<table>

<tr>
<!-- <th>ID</th> -->
<th>MEDIA</th>
<th>NAME</th>  
<th>PRICE</th>

<th>ACTION</th>

</tr>
<?php foreach ($collections as $c) { ?>
<tr>
<!-- <td><?php echo $c['id']  ?></td> -->
<td>
<img src="../admin/<?php echo $c['image']  ?>" alt="" width="100px" height="100px" style="border-radius: 10%; box-shadow: 0px 0px 7px gray;"/>
</td>
<td>
<?php echo $c['name']; ?>
</td>
<td>
  <div id="pricecontainer">
    <div class="symbol">

    <img src="assets/img/eth.svg" alt="">

    </div>
    <div class="amount">
<?php echo $c['price']; ?>
</div></div>
</td> 

 


<td>
  <form action="purchase/1purchase.php" method="post">
    <input type="hidden" name="id" value="<?php echo $c['name'] ?>">
<button type="submit" class="btn-lg btn-success " >PURCHASE</button>
  </form>
</td>
</tr>

<?php } ?>
</table>


</div>
















    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
