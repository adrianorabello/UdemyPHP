<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="busca" value="">
      <button type="submit" name="button">Pesquisar</button>
    </form>
  </body>
</html>
<?php
  if (isset($_POST['busca'])) {
    //echo $_POST['busca'];
    // serve para barar as tags de html
    echo strip_tags($_POST['busca']);
  }

 ?>
