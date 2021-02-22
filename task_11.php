 <?php 
require 'uploads.php';
  uploadImage($_FILES['image']);
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
