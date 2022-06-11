<!-- Face Cones  -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Bored Apes</title>
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
    <link rel="stylesheet" href="mint.css">
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
            <li><a class="nav-link scrollto " href="2.php">Collection</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->




    <section class="collections">



    <form action="" enctype="multipart/form-data" method="POST">

        <!--  -->

        <?php

include '../config/config.php';

if(isset($_FILES['image']) and $_POST['name'] and $_POST['price']){
 
  // check if NFT already exists
  $sql = "SELECT * FROM  boredapes WHERE name = '".$_POST['name']."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if($row){
    echo "<center> <h2 class='alert alert-danger' style='margin-bottom:50px;'>NFT already exists</h2></center>";
     
  }
  else{

  $file_name = $_FILES['image']['name'];
  $file_tmp = $_FILES['image']['tmp_name'];
  
 
   $dest_file = "upload-boredapes/".$file_name;

  move_uploaded_file($file_tmp,$dest_file);
 
  $name = $_POST['name'];
  $price = $_POST['price'];
 
  $sql = "INSERT INTO boredapes (name,price,image) VALUES ('$name','$price','$dest_file')";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "<center><h2 class='alert alert-success' style='margin-bottom:50px;'> NFT minted successfully ! </h2></center>"; 
  }else{
    echo "<center> <h2 class='alert alert-danger' style='margin-bottom:50px;'>Failed to mint NFT </h2></center>";
  }

    }
}

else{
  // echo "<center><h2 class='alert alert-danger' style='margin-bottom:50px;'> Enter Valid Info</h2></center>"; 
}


?>

    <!--  -->

    <div class="combo">
    <h2>Name </h2>
    <input type="text" name="name">

    <h2 class='price'>Price </h2> 
    <br/>
    <input type="text" name="price" >
    </div>
    <br><br>
    <h2>NFT</h2>
    <div class="combo1">
            <div class="img">
           <img id="pi">
          </div>
         <input type="file" name="image" accept="image\*" id="upload">
    </div>

 <br/>
    
 <input type="submit" value=" + MINT" id="mint" class="btn btn-success" onclick="sub(event)>



    </form>
       

   </section>




    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="mint.js"></script>
  </body>
</html>
