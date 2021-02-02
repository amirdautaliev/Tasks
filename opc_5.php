<?php 

 $pdo = new PDO("mysql:host=localhost; dbname=test;", "mysql", "mysql");
 if($sql = ("INSERT INTO users (name, surname, age) VALUES ('amir', 'day', 27)");{
 	echo 'dфывыфвфывыфвфыв';
 }
$pdo->prepare($sql)->execute($data);


 ?>