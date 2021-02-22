<?php 
function uploadImage($image)
{
$name = $image['name'];
$tmp_name =$_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name, 'uploads/'. $name);
 }
  uploadImage($_FILES['image']);
 ?>
