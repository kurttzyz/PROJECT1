<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit">
  </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])) {

  $name = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $folder = '../Account/';
  move_uploaded_file($tmp_name,$folder.$name);
}