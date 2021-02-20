<?php 
$username = $_POST['username'];
$email =$_POST['email'];
$img = $_FILES ['img'];
$tmp_name = $_FILES['img'];

$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");
$sql= "INSERT INTO task (username,email,img) VALUES (:username,:email)";
$statement = $pdo->prepare($sql);
$statement -> execute(['username'=>$username,'email'=>$email]);
$connection->query('INSERT INTO task VALUES ('$img''));
//header('Location: task_11.php');
//exit();
 ?>
