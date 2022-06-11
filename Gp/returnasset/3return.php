<?php

include '../../config/config.php';

session_start();
$user = $_SESSION['user'];

  $name = $_POST['id'];
  
  $sql = "SELECT * FROM invisiblefriends WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $price = $row['price'];

       


    
    $sql = "SELECT * FROM `login` WHERE `username` =  '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $balance = $row['balance'];

   
     
     $refund = $price * 0.5;
     

     $newbalance = $balance + $refund;
      
$sql = "UPDATE `invisiblefriends` SET `owner` = NULL WHERE `name` = '$name'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `login` SET `balance` = '$newbalance' WHERE `username` = '$user'";
$result = mysqli_query($conn, $sql);

 
header("Location: returnasset.php");




   


?>