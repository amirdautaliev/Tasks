<?php 
session_start();
include "func.php";
$email= $_POST["email"];
$password = $_POST["password"];
function redirect(){
$header = header("Location: /page_login.php");
}

function login($email,$password){
	$user = check_user($email);
	if(empty($user)) {
	$_SESSION["error"]="Пароль или логин не правильно";
	redirect($header);
    exit;
}
if(!password_verify($password, $user["password"])){
	$_SESSION["error"]="Пароль или логин не правильно";
	redirect($header);
     	exit;
	}
}
	$_SESSION['user']['email'] = $user;
	header("Location: /users.html");
	login($email,$password);

 ?>

