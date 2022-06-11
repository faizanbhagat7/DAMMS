

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAMMS...</title>
    <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css" />
    
  </head>
  <body>




    <div class="container">
      <div class="module">
        <form action="http://localhost/DAMMS/login/login.php" method="post" onsubmit="sub(e)">
          <h2 class="title">
          <span class='arrow'> <a href="../index.php"> &larr;  </a> </span>      
          Login to your User Account</h2>
          <h1>Enter Username :</h1>
          <input type="text" name="username" class="data" />

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
function sub(e){
  e.preventDefault();
}</script>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
  $username = $_POST['username'];
  $password = $_POST['password'];

  $check = "SELECT username FROM login WHERE username = '$username'";
  $res = mysqli_query($conn,$check);


  if($username != '' and $password != '' ){
   


if($res->num_rows != 0){ 
  // echo "User found".'<br>'; 
   $check_password = "SELECT username,password FROM login WHERE username = '$username' AND password = '$password'"; $res_password = mysqli_query($conn,$check_password);

if($res_password->num_rows != 0){
   echo "Login successfull".'<br/>'; 
   echo "<script> alert('Login successfull'); </script>";
   session_start();
    $_SESSION['user'] = $username;
    
    
   header('location:../Gp/index.php');
  }

  else{
      echo "<h1 class='alert'> Incorrect Password  </h1>"; 
  }

}
  else{  echo "<h1 class='alert'> User
not found </h1>"; }
 
 } 
 else{
  echo "<h1 class='alert'> Enter Valid Information </h1>";
}
}
?>

        </h2>

        <h2 class="register">
          * Don't have an account ?<br />
          <a href="../login/register.php">Register</a> to our website.
        </h2>
      </div>
    </div>
  </body>




</html>
