<?php 
session_start();
require_once ("func.php");
$email = $_POST["email"];
$password = $_POST["password"];
$user = check_user($email);

if(!empty($user)){
	set_message($name,$message);
	redirect_to("Location: /page_register.php");
exit;
}
$_SESSION["success"] = "вы успешно прошли регистрацию";
header("Location: /page_login.php");
add_user($email,$password);
 ?>
