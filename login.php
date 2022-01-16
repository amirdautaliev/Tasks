<?php 	
session_start();
$email  = $_POST['email'];
$password = $_POST['password'];
require_once "function.php";

function login($email,$password){
$user = check_user($email);
if(empty($user)){
$_SESSION['error'] = 'Вы ввели не правильно логин или пароль';
header("Location: /page_login.php");
exit;
}
if(!password_verify($password, $user['password'])){
$_SESSION['error'] = 'Вы ввели не правильно логин или пароль';
header("Location: /page_login.php");
exit;
}
}
$user = check_user($email);
$_SESSION['user'] = $user;
$_SESSION['role'] = $user['role'];
$_SESSION['user_id']=$user['id'];
$_SESSION['password'] = $password;
header("Location: /users.php");
login($email,$password);

 ?> 
