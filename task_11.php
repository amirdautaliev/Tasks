<?php 
var_dump($_FILES);
$name_file = trim(mb_strtolower($_FILES['file']['name']));
$tmp_name = $_FILES['file']['tmp_name'];
if(!file_exists('img')){
mkdir('img');
}
$filename='img/$name_file';
move_uploaded_file($tmp_name,$filename);

if (file_exists($filename) && !empty($_FILES)){
	echo 'Файл сохранено' . $name_file;
}

 ?>

<html>
<form action="save_11.php" method="POST">
                                 <fieldset>
 <legend>информация</legend>
 <label>Имя<input type="text" required></label>
 <label>E-mail<input type="email" required></label>
 </fieldset>
 </form>
 <form action="#" enctype="multipart/form-data" method="POST">
  <input type="file" name='fille'>
  <input type="submit" value='enter'>
  </form>


</html>
</html>


