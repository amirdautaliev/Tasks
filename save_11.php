<?php 
require  'uploads.php';
$username = $_POST['username'];
$email =$_POST['email'];
$imagetmp = $_FILES ['image']['tmp_name'];
$imagename = $_FILES['image']['name'];
$path = 'uploads/';
$filedir = $path.$imagetmp;
$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");
$sql= "INSERT INTO task (username,email,image_path) VALUES (:username, :email, :image_path)";
$statement = $pdo->prepare($sql);
$statement -> execute(['username'=>$username,'email'=>$email,'image_path'=>$filedir]);
header('Location: task_11.php');
move_uploaded_file($imagetmp,$filedir);
//exit();
 ?>
