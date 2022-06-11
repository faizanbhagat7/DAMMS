<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet</title>
    <link rel="shortcut icon" href="../../assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="wallet.css">
</head>
<body>

<div class="main">
    <div class="container">
   
        <div class="top">
        <div class="arrow"> <a href="../index.php"> &#8592; </a></div>
        <div class="header">
            <h1 >Wallet</h1>

        </div>
        </div>
        <div class="name">
        
               <?php
            
            include '../../config/config.php';
                // get the user name
                 session_start();
                $user = $_SESSION['user'];
                echo "Welcome".' '.$user; 
               ?>
            
         

        </div>

       
        
        <div class="content">
            <div class="balance">
                <h2>Total Balance :</h2>
            </div>
            <div class="balance-amount">
                  <div class="symbol">
                        <img src="../assets/img/eth.svg" alt="eth">
                  </div>    

                <div class="amount">
                   <h1>
                   
                     <?php


                    $sql = "SELECT * FROM `login` WHERE `username` = '$user'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $balance = $row['balance'];
                    echo $balance;
                    
                    ?>
                    
               
                   
                   </h1>
                </h1>
            </div>

</div>
</div>

        <div class="content">
            <div class="balance">
                <h2>Assets Owned :</h2>
            </div>
            <div class="balance-amount">
                  <!-- <div class="symbol">
                        <img src="../assets/img/eth.svg" alt="eth">
                  </div>     -->

                <div class="amount">
                   <h1> 
                                                
                        <?php   
                        $sql = "SELECT * FROM `facecones` WHERE `owner` =  '$user'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
   
                        $fc = mysqli_num_rows($result);
                        
                        // for listing all the data in the table
                        // foreach($result as $row){
                        //     echo "<br>";
                        //     echo $row['name'];
                        //     echo "<br>"; 
                        // }

                       
                       
                      
                        $sql = "SELECT * FROM `boredapes` WHERE `owner` =  '$user'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
 
                        $ba = mysqli_num_rows($result);

                     

                       

                        $sql = "SELECT * FROM `invisiblefriends` WHERE `owner` =  '$user'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                       
                        $if = mysqli_num_rows($result);

                     





                        $sql = "SELECT * FROM `classiccollection` WHERE `owner` =  '$user'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                       
                        $cc = mysqli_num_rows($result);

                        
                           

                     $total = $fc + $ba + $if + $cc;
                        echo $total;

                        
                        


                        ?>




                   </h1>
                </h1>
            </div>

           
        </div>
    </div>
    </div>                        






</body>
</html>