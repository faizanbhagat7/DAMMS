<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$uid = $_POST['uid'] ?? null;

if(!$uid) {
    header('Location: manageusers.php');
    exit;
}


//  get the user's name
$statement = $pdo->prepare("SELECT username FROM login WHERE uid = :uid");
$statement->bindParam(':uid', $uid);
$statement->execute();
$username = $statement->fetch(PDO::FETCH_ASSOC);


//  delete the user asssets
$statement = $pdo->prepare("UPDATE facecones SET owner = NULL WHERE owner = :username");
$statement->bindParam(':username', $username['username']);
$statement->execute();

$statement = $pdo->prepare("UPDATE boredapes SET owner = NULL WHERE owner = :username");
$statement->bindParam(':username', $username['username']);
$statement->execute();

$statement = $pdo->prepare("UPDATE invisiblefriends SET owner = NULL WHERE owner = :username");
$statement->bindParam(':username', $username['username']);
$statement->execute();

$statement = $pdo->prepare("UPDATE classiccollection SET owner = NULL WHERE owner = :username");
$statement->bindParam(':username', $username['username']);
$statement->execute();




// deleting user's login info

$statement = $pdo->prepare("DELETE FROM login WHERE uid = :uid");
$statement->bindParam(':uid', $uid);
$statement->execute();

// 




// get the user's name

  
 


    



 
// 


header('Location: manageusers.php');

?>