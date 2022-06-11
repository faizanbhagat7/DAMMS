<!-- Face Cones  -->
<?php

include '../config/config.php';
  session_start();
    $user = $_SESSION['user'];
$sql = "SELECT * FROM `facecones` WHERE `owner` IS NULL order by date desc";
 $result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);
 $fc  =  mysqli_num_rows($result1);
 
//  sort by date




 

                        
$sql = "SELECT * FROM `boredapes` WHERE `owner` IS NULL order by date desc";
$result2 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result2);
$ba = mysqli_num_rows($result2);
 
// 

$sql = "SELECT * FROM `invisiblefriends` WHERE `owner`  IS NULL order by date desc";
$result3 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result3);
$if = mysqli_num_rows($result3);
// 

$sql = "SELECT * FROM `classiccollection` WHERE `owner` IS NULL order by date desc";
$result4 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result4);
$cc = mysqli_num_rows($result4);
 
 $totalassets = $fc + $ba + $if + $cc; 

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Collections</title>
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
              <a class="nav-link scrollto active" href="collections.php"
                >Collections</a
              >
            </li>
            <li><a class="nav-link scrollto " href="purchasedassets.php">Purchased Assets</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->


    <!--  -->

    <section class="collections">
     

      <!-- info    -->
      <div class="info">
        <div class="name">
          <h1>Collections</h1>
        </div>

        <div class="desc" style="font-size:25px">
        Collections of  variety of NFT's from vast range of categories.
        
       
        </div>
      </div>
      <div class="info">
  
  <h1 class="name"> Wallet Balance </h1>

  <div class="amount">
<div class="eth">
<img src="assets/img/eth.svg" alt="eth">
</div>

<div class="price">
<?php 



$sql = "SELECT * FROM `login` WHERE `username` =  '$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$balance = $row['balance'];
echo "<h1 >$balance</h1>";


?>
</div>
</div>
  </div>
 

       
      

      <div class="btn" style="font-size:30px;">
        <h1 >Total Assets Available</h1>
        <h1 style="font-size:50px;"><?php 
        
        echo $totalassets;
         
        
        

        ?></h1>

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
<th>MEDIA</th>
<th>NAME</th>
<th>PRICE</th>
<th>Action</th>

</tr>


<?php foreach ($result1 as $c) { ?>
<tr>
<td>
   <img src=" ../admin/<?php echo $c['image']  ?>" alt="NFT">  
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
    <form action="purchase/1purchase.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $c['name']; ?>">
  <button type="submit" class= "btn-lg btn-success">
   Purchase</button>
  </form>
  </td>


</tr>



<?php } ?>

<!--  -->


<?php foreach ($result2 as $c) { ?>
<tr>
<td>
   <img src=" ../admin/<?php echo $c['image']  ?>" alt="NFT">  
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
    <form action="purchase/2purchase.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $c['name']; ?>">
  <button type="submit" class= "btn-lg btn-success">
   Purchase</button>
  </form>
  </td>

</tr>



<?php } ?>

<!--  -->

<!--  -->



<?php foreach ($result3 as $c) { ?>
<tr>
<td>
   <img src=" ../admin/<?php echo $c['image']  ?>" alt="NFT">  
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
    <form action="purchase/3purchase.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $c['name']; ?>">
  <button type="submit" class= "btn-lg btn-success">
   Purchase</button>
  </form>
  </td>


</tr>



<?php } ?>

<!--  -->


<!--  -->


<?php foreach ($result4 as $c) { ?>
<tr>
<td>
   <img src=" ../admin/<?php echo $c['image']  ?>" alt="NFT">  
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
    <form action="purchase/4purchase.php" method="POST">
      <input type="hidden" name="id" value="<?php 
      echo $c['name']; ?>">
  <button type="submit" class= "btn-lg btn-success">
   Purchase</button>
  </form>
  </td>

</tr>



<?php } ?>
<!--  -->
</table>


</div>



    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
