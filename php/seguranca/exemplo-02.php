<?php

    $id = (isset($_GET['id']))?$_GET['id']:1;
    if (!is_numeric($id)) {
      echo "pegamos você ";
      exit;
    }else{
      $con = mysqli_connect("localhost","root","","dbphp7");
      $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
      $exec = mysqli_query($con,$sql);
      while ($resultado = mysqli_fetch_object($exec)) {
        //echo $resultado->deslogin;
        var_dump($resultado);
      }
  }


 ?>
