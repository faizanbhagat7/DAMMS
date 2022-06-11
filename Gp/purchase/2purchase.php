<?php

include '../../config/config.php';

    //  for specfic nft details
    session_start();
    $user = $_SESSION['user'];
    
    $name = $_POST['id'];

    $_SESSION['id']= $name;
    // echo $name;

    $sql = "SELECT * FROM boredapes WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    

   
?>

<!-- Bored Apes  -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bored Apes</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="../../assets/icon.png" type="image/x-icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="purchase.css" />
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
          <a href="=../index.php">DAMMS<span>.</span></a>
        </h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
            <li>
              <a class="nav-link scrollto" href="../purchasedassets.php"
                >Purchased Assets</a
              >
            </li>
            <li><a class="nav-link scrollto active" href="../collections.php"> Latest Collection</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->


    <!--  -->
   

    <section class="collections">

    <div class="banner">
<?php


 

?>
    </div>

    </section>

    <section class="collections1">

    

    
      <!--logo  -->
      <div class="logo">
        <img src="../../admin/<?php echo $row['image']; ?>" alt="logo" 
        alt="error"  style="width:250px;height:250px;">


      </div>

      
      <!-- info    -->
      <div class="info">
        <div class="name">
          <h1 class="name" align="center"> 
          Collection : &nbsp;
          Bored Apes</h1>
        </div>

        <div class="desc">
             
           <h1 class="name">
               Name : &nbsp; <?php echo $row['name']; 
              
               ?> 
               </h1>
            <h1>

                <div id="pricecontainer">
                    <div class="symbol">
                 Price :  <img src="../assets/img/eth.svg" alt="eth">
                    </div>
                    <div class="amount">
                <?php echo $row['price'];?>
                </div>
                </div>
            </h1>               
        </div>
      </div>
      <!-- end info -->

      

    


      <div class="info1">
       <div class="btn">

       <?php
    
       if($row['owner'] != $_SESSION['user']){
        
        echo "
        <div>
        <form action='2pc.php' method='POST'>
        <input type='hidden' name='name' value='".$row['name']."'>
         <button class='btn-lg btn-success'>PURCHASE</button>
        </form>
        </div>
        ";

        
       }
       
       else{
         echo " <div></div> ";
       }
       ?>

        </div>

      </div>


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



 </div>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
