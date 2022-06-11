

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAMMS...</title>
    <!-- <link rel="shortcut icon" href="https://lh3.googleusercontent.com/KzQ_h_CThc6Pfd8KA-a99O-Grw-J2o2weCyqxHVUvDmwUOAjsaCgVPaNatPOytzSr_5mQb9aosamdqDu9k7RcSrslbCKhO0t4F6z4WA=w224" type="image/x-icon"> -->
    <link rel="stylesheet" href="login.css" />
    <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
    <!-- bootstrap -->
   
  </head>
  <body>




    <div class="container">
      <div class="module">
        <form action="http://localhost/DAMMS/login/adminlogin.php" method="post" onsubmit="sub(e)">
          <h2 class="title"> 
      <span class='arrow'> <a href="../index.php"> &larr;  </a> </span>    
          Login to your Creator Account</h2>
          <h1>Enter Creator's name :</h1>
          <input type="text" name="adminname" class="data" />

          <h1>Enter password :</h1>
          <input type="password" name="password" class="data" />
          <br /><br />
          <input type="submit" name="submit" class="submit" />
        </form>


        <!-- Warning section  -->
        <h2 class="warn">
        <?php  

include '../config/config.php';

echo " <script>
 sub(e);
</script>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
  $adminname = $_POST['adminname'];
  $password = $_POST['password'];

  $check = "SELECT adminname FROM admin WHERE adminname = '$adminname'";
  $res = mysqli_query($conn,$check);


if($adminname != '' and $password != '' ){
   
  if($res->num_rows != 0){ 
  // echo "User found".'<br>'; 
   $check_password = "SELECT adminname,password FROM admin WHERE adminname = '$adminname' AND password = '$password'";
   
   $res_password = mysqli_query($conn,$check_password);

    if($res_password->num_rows != 0){
   echo "Login successfull".'<br/>'; 
   echo "<script> alert('Login successfull'); </script>";
   session_start();
   header('location:../admin/homepage.php');
  }

   else{
      echo "<h1 class='alert'> Incorrect Password  </h1>"; 
  }

}
  else
  {  
    echo "<h1 class='alert alert-danger'> Admin not found </h1>";
  }
 
} 
else{
  echo "<h1 class='alert alert-danger'> Enter Valid Information </h1>";
}

}
?>

        </h2>

       
      </div>
    </div>

    
  </body>




</html>
