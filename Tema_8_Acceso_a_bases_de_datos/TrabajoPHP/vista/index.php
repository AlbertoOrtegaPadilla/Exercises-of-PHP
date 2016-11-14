<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina principal</title>
  </head>
  <body>
    <?php
        $user = $_POST['login'];
        if($user != "ok"){
            header("Location: http://localhost/TrabajoPHP/vista/login.php");
        }else{
            echo "Accediste a la Pagina !!";
        }
    ?>
  </body>
</html>
