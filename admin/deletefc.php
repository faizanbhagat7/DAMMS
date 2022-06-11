<?php

$pdo = new PDO('mysql:host=localhost;dbname=damms', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$id = $_POST['id'] ?? null;

if(!$id) {
    header('Location: 1.php');
    exit;
}


$statement = $pdo->prepare("DELETE FROM facecones WHERE id = :id");
$statement->bindParam(':id', $id);
$statement->execute();

header('Location: 1.php');

?>