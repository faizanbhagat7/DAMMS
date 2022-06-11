<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





//  get the user's name
$statement = $pdo->prepare("SELECT username FROM login WHERE uid = :uid");
$statement->bindParam(':uid', $uid);
$statement->execute();
$username = $statement->fetch(PDO::FETCH_ASSOC);


//  delete the user asssets
$statement = $pdo->prepare("UPDATE facecones SET owner = NULL  ");

$statement->execute();

$statement = $pdo->prepare("UPDATE boredapes SET owner = NULL ");

$statement->execute();

$statement = $pdo->prepare("UPDATE invisiblefriends SET owner = NULL ");

$statement->execute();

$statement = $pdo->prepare("UPDATE classiccollection SET owner = NULL ");

$statement->execute();


//  delete all records 
$statement = $pdo->prepare("DELETE FROM login");
$statement->execute();



header('Location: manageusers.php');

?>