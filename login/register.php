

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
    <div class="container1">
      <div class="module1">
        <form action="/DAMMS/login/register.php" method="post">
          <h2 class="title">
          <span class='arrow'> <a href="../index.php"> &larr;  </a> </span>      
          
          Register to our website</h2>
          <h1>Enter Username :</h1>
          <input type="text" name="username" class="data" />

          <h1>Enter Email Id :</h1>
          <input type="text" name="mailid" class="data" />

          <h1>Create password :</h1>
          <input type="password" name="password" class="data" />
          <br />
          <h1>Confirm password :</h1>
          <input type="password" name="cpassword" class="data" />
          <br /><br />
          <input type="submit" name="submit" class="submit" />
        </form>

        <div class="warn">

        <?php

include '../config/config.php';





if($_SERVER['REQUEST_METHOD'] == 'POST'){



  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $mailid = $_POST['mailid'];

  if($username != '' and $password != '' ){

    
    if(isset($_POST['submit'])){

      if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {

      echo "<h2 class='alert'>Username should only contain alphabets </h2>";

    }
 
    else{


    $check = "SELECT username FROM login WHERE username = '$username'";
  $userres = mysqli_query($conn,$check); 
  if($userres->num_rows == 0) {

    // mail validation
    $mailid = filter_var($mailid, FILTER_SANITIZE_EMAIL);


    if (filter_var($mailid, FILTER_VALIDATE_EMAIL)) {

  
    // password should have atleast onne special character  
    if(preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^", $password)){
 
     if(strlen($password)>=8){
       

    if($password == $cpassword ){
 
    $sql = "INSERT INTO `login` (`username`, `password`,`emailid`) VALUES ('$username', '$password','$mailid')";
    $res = mysqli_query($conn,$sql);
    if($res){
      echo "data inserted successsfully";
      session_start();

      header('location:login.php');
    }}
    else{
      echo "<h2 class='alert'> passwords must be same <h2>";
    }
  }
  else{
    echo "<h1 class='alert'> Password should be minimum 8 characters long </h1>";
  }
  }

  else{
    echo "<h2 class='alert'> 
     password must contain symbols, numbers and alphabets </h2>";
    
  }
  
 
} 

else{
  echo "<h1 class='alert'>Enter valid Email Id !</h1>";
}

  }
  else{
    echo "<h1 class='alert'>User already exists !</h1>";
  
  }
  
}
}
else{
  echo "<h2 class='alert'> Enter appropriate details <h2>";
}
  }


  else{
    echo "<h2 class='alert'> Enter appropriate details <h2>";
  }

}
 

?>



        </div>

        <h2 class="register">
          Already have an account.<br />
          <a href="./login.php"> Login </a> with account
        </h2>
      </div>
    </div>
  </body>
</html>

 