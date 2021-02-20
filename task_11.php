<?php 
if(!empty($_FILES['img']['tmp_name']))
	$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));


/*$name_file = trim(mb_strtolower($_FILES['file']['name']));
$tmp_name = $_FILES['file']['tmp_name'];
if(!file_exists('img')){
mkdir('img');
}
$filename='img/$name_file';
move_uploaded_file($tmp_name,$filename);

if (file_exists($filename) && !empty($_FILES)){
	echo 'Файл сохранено' . $name_file;
}*/

 ?>

<html>
 <form action="save_11.php" enctype="multipart/form-data" method="post">
  
                                 <fieldset>
 <legend>информация</legend>
 <label>Имя<input type="username" name='username'></label>
 <label>E-mail<input type="email"name='email' ></label>
 <label> Отправить файл <input type="file" name='img'></label>
 <label><input type="submit" value='Отправить'></label>
 </fieldset>



  </form>


</html>
