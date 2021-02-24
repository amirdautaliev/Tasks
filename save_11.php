<?php 
function uploadImage($image)
	{
	$name = $image['name'];
	$tmp_name =$_FILES['image']['tmp_name'];
	move_uploaded_file($tmp_name, 'uploads/'. $name);
	 }
  uploadImage($_FILES['image']);
$username = $_POST['username'];
$email =$_POST['email'];
$tmp_name = $_FILES ['image']['tmp_name'];
$name = $_FILES['image']['name'];
$path = 'uploads/';
$filedir = $path.$tmp_name;
$pdo = new PDO ("mysql:host=localhost;dbname=my_study;","mysql","mysql");
$sql= "INSERT INTO task (username,email,image_path) VALUES (:username, :email, :image_path)";
$statement = $pdo->prepare($sql);
$statement -> execute(['username'=>$username,'email'=>$email,'image_path'=>$filedir]);
//header('Location: task_11.php');
//move_uploaded_file($tmp_name,$filedir);
 // uploadImage($image);
//exit();	
 ?>
 <html>
 <form action="save_11.php" enctype="multipart/form-data" method="post">
                                 <fieldset>
 <legend>информация</legend>
 <label>Имя<input type="username" name='username'></label>
 <label>E-mail<input type="email"name='email' ></label>
 <label> Отправить файл <input type="file" name='image'></label>
 <label><input type="submit" value='Отправить'></label>
 </fieldset>
</form>
</html>
