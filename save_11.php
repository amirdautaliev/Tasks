<?php 

$username = $_POST['username'];
$email =$_POST['email'];
$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");
$sql= "INSERT INTO task (username,email) VALUES (:username,:email)";
$statement = $pdo->prepare($sql);
$statement -> execute(['username'=>$username,'email'=>$email]);


 ?>
