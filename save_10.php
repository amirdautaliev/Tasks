<?php 
session_start();

$text = $_POST['text'];
$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");

$sql = "SELECT * FROM my_tasks WHERE text=:text";
$statement=$pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($task);die;

if(!empty($task)){
	$message = 'Введенная вами запись уже присутствует в таблице.';
$_SESSION['danger'] = $message;

header("Location: /task_10.php");
 exit;
}

$sql="INSERT INTO my_tasks (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text'=>$text]);

$message = 'Ваша запись успешно сохранено!';
$_SESSION['success'] = $message;

header("Location: /task_10.php");

	