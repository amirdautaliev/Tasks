<?php 
// $path = 'F:\OpenServer\domains/uploads/';
// echo $path . basename(($_FILES['filename']['name'])['extension']));
 $tmpName = $_FILES['filename']['tmp_name'];



  $name= $_FILES['filename']['name'];
$pdo = new PDO('mysql:host=localhost;dbname=my_study', 'mysql','mysql');
$sql = 'INSERT INTO file_name (`name`) VALUES (:name)';
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]); 
if(move_uploaded_file($tmpName, 'F:\OpenServer\domains/uploads/'.time().'.'.pathinfo($_FILES['filename']['name'])['extension']))
{
	echo 'Название файла: ' ;
	echo $_FILES['filename']['name'] . '<br>';
	echo 'Размер файла: ';
	echo $_FILES['filename']['size'] . '<br>';
	echo 'Тип файла: ';
	echo $_FILES['filename']['type'] . '<br>';
}else {
			echo ('Файл не загружен на сервер' . '<br>');
		} 
	// if ($_FILES['filename']['size'] > 2 * 1024 * 1024) {
	// 	echo 'Файл превышает более 2 мегебайтов' . '<br>';
	// }
	// 	else {
	// 		echo ('Файл не загружен на сервер' . '<br>');
	// 	} 
	// echo 'Файл успешно загружен на сервер! <br>';
	// echo 'Харектеристики файла <br>';
	// echo 'Название файла: ' ;
	// echo $_FILES['filename']['name'] . '<br>';
	// echo 'Размер файла: ';
	// echo $_FILES['filename']['size'] . '<br>';
	// echo 'Тип файла: ';
	// echo $_FILES['filename']['type'] . '<br>';



 ?>
