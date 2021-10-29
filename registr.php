<?php 
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
function check_user($email){
$pdo = new PDO ("mysql:host=localhost;dbname=project","mysql","mysql");
 $sql = "SELECT * FROM users WHERE email=:email";
 $statement=$pdo->prepare($sql);
 $statement->execute(["email"=>$email]);
 $user = $statement->fetch(PDO::FETCH_ASSOC);
 return($user);
}

$user = check_user($email);	


  
 	if(!empty($user)){
 $_SESSION["danger"]="Этот эл. адрес уже занят другим пользователем.";

 header("Location: /page_register.php"); 
 exit;
 }

 else $_SESSION["success"] = "Регистрация успешна прошло, можете заходить!";{
header("location: /page_login.php");
}
 function add_user($email,$password)
 {
 	$pdo = new PDO ("mysql:host=localhost;dbname=project","mysql","mysql");
 $sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
 $statement=$pdo->prepare($sql);
 $statement->execute([
"email"=>$email,
"password"=>$password

]);
}


add_user($email,$password);



 ?>
