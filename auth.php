<?php 	
session_start();
function is_user_logged_in(){       // Функция проверки существует ли пользователь
 return isset($_SESSION['user']);
   }
   
   function login_require(){
    if (!is_user_logged_in()){                  // Проверка страницы на авторизация
        header("Location: /page_login.php");
    }
   }
   
function logout(){                                  // Функция для удаления сессий  выхода
    if(is_user_logged_in()) {
        unset($_SESSION['user']);  
        session_destroy();
        header("Location: /page_login.php");
    }
}



 ?>
