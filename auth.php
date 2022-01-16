<?php 	
session_start();
function is_user_logged_in(){
 return isset($_SESSION['user']);
   }
   
   function login_require(){
    if (!is_user_logged_in()){
        header("Location: /page_login.php");
    }
   }
   
function logout(){
    if(is_user_logged_in()) {
        unset($_SESSION['user']);
        session_destroy();
        header("Location: /page_login.php");
    }
}



 ?>