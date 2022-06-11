

<?php

include '../../config/config.php';

    //  for specfic nft details
    
    session_start();
    $user = $_SESSION['user'];
    
    $name = $_SESSION['id'];
    // echo $name;

    $sql = "SELECT * FROM invisiblefriends WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    

   
?>

<!-- INvisible friends  -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Purchase result</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link
      href="https://lh3.googleusercontent.com/KzQ_h_CThc6Pfd8KA-a99O-Grw-J2o2weCyqxHVUvDmwUOAjsaCgVPaNatPOytzSr_5mQb9aosamdqDu9k7RcSrslbCKhO0t4F6z4WA=w224"
      rel="icon"
    />
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
          <a href="../index.php">DAMMS<span>.</span></a>
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



include '../../config/config.php';

    

    $user = $_SESSION['user'];

    $sql = "SELECT * FROM  login  WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // balance amount
    $balance = $row['balance'];
    
   
    $mail = $row['emailid'];

    // For balance updation
    
   $name = $_POST['name'];


    $sql = "SELECT * FROM invisiblefriends WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
     

    $price = $row['price'];
    
    

    echo "<br>";
    $newbal = $balance - $price;
    

 
    // owner update query

    if ($balance >= $price) {

    $sql = "UPDATE `invisiblefriends` SET `owner` = '$user' WHERE `invisiblefriends`.`name` = '$name'";
    $result = mysqli_query($conn, $sql);
     


    // balance updation
    $sql = "UPDATE `login` SET `balance` = '$newbal' WHERE `login`.`username` = '$user'";
    $result = mysqli_query($conn, $sql);
     

        //  for sending mail


        $to = ($mail);
        $subject = "Invisible friends NFT Purchase from DAMMS";
        $message = '🚀 Congratulations!
Hey '.$user.',
You own a '.$name.' NFT worth '.$price.' eth from Invisible Friends collection.';
        $headers = "From:bfaizanbhagat@gmail.com";
        
    
        mail($to, $subject, $message, $headers);



    echo "<center><h2 class='alert alert-success' style='
    padding:20px;     
     margin:50px 200px 0px 200px;
    '> Congratulations ! NFT purchased successfully </h2></center>";
     
    }

    else {
         
        echo "<center><h2 class='alert alert-danger' style='
        padding:20px;     
         margin:50px 200px 0px 200px;
        '> Sorry ! You don't have sufficient amount of balance to puchase this NFT </h2></center>";
    }
    
  



      

    
        
  
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
          Invisible Friends</h1>
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
