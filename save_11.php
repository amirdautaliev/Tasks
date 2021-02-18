<?php 
$username = $_POST['username'];
$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");
$sql= INSERT INTO task (username) VALUES (:username);
$statement = $pdo->prepare($sql);
$statement -> execute(['username'=>$username]);
 ?>