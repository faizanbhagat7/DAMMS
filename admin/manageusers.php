<!-- Face Cones  -->
<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare("SELECT * FROM login");
$statement->execute();
$collections = $statement->fetchAll(PDO::FETCH_ASSOC);




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Manage Users</title>
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
          <a href="homepage.php">DAMMS<span>.</span></a>
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="homepage.php">Home</a></li>
            <li>
              <a class="nav-link scrollto" href="admin-collections.php"
                >My collections</a
              >
            </li>
            <li><a class="nav-link scrollto active" href="manageusers.php">Manage Users</a></li>
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
          <h1>Manage Users</h1>
        </div>

        <div class="desc" style="font-size:25px">
        View , edit and delete users. <br/>
        You can view all the users using DAMMS and suspend them.
        </div>
      </div>

       
      

      <div class="btn" style="font-size:30px;">
        <h1 >Total &nbsp;Active &nbsp;Users</h1>
        <h1 style="font-size:50px;"><?php echo count($collections); ?></h1>
      </div>

      
      <div class="btn">

      <form action="deleteallusers.php" method="post">
          
        <button type="submit" class="btn btn-danger " > -  &nbsp; SUSPEND ALL USERS</a>
        </form>
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

<th>USER</th>
<th>WALLET BALANCE</th>
<th>ASSEST PURCHASED</th>
<th>ACTION</th>

</tr>
<?php foreach ($collections as $c) { ?>
<tr>


<td>
<?php echo $c['username']; ?>
</td>

 <td>
 <div id="pricecontainer">
    <div class="symbol">

    <img src="assets/img/eth.svg" alt="">

    </div>
    <div class="amount">
<?php echo $c['balance']; ?>
</div></div>
 </td>

 <td>
<?php 
 include '../config/config.php';

$user = $c['username'];
$sql = "SELECT * FROM `facecones` WHERE `owner` =  '$user'";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);
$fc  =  mysqli_num_rows($result1);


// 
                       
$sql = "SELECT * FROM `boredapes` WHERE `owner` =  '$user'";
$result2 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result2);
$ba = mysqli_num_rows($result2);

// 

$sql = "SELECT * FROM `invisiblefriends` WHERE `owner` =  '$user'";
$result3 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result3);
$if = mysqli_num_rows($result3);
// 

$sql = "SELECT * FROM `classiccollection` WHERE `owner` =  '$user'";
$result4 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result4);
$cc = mysqli_num_rows($result4);

$totalassets = $fc + $ba + $if + $cc; 


echo $totalassets;
?>
 </td>
<td>
    <form  method="post" action="userdelete.php">
        <input type="hidden" name="uid" value="<?php echo $c['uid']; ?>">
        <button type="submit"  class="btn btn-danger " > - &nbsp;SUSPEND USER</a>
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
