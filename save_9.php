<?php 
    $text = $_POST['text'];
    $pdo = new PDO("mysql:host=localhost; dbname=my_study;", "mysql", "mysql");
    $sql = "INSERT INTO my_tasks (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
header("Location: /task_9.php");
