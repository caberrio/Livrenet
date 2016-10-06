<?php
  session_start();
  if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "DsI6BMQeVzalCuEr", "livrenet");

    if(!$conn){
      die("Error de conexión: ".mysqli_error($conn));
    }
    $result = $conn->query("SELECT * FROM usuario where username='$username' AND password='$password'");
    if($result){
      $res = mysqli_fetch_array($result);
      if(!$res){
        die("ERROR ".mysqli_error($conn));
      }
      $_SESSION['id'] = $res['id'];
      header('Location: upload.php');
      echo "login succesful";
      exit();
    }else{
      die("ERROR ".mysqli_error($conn));
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<div id="entr">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div> 
      <div class="col-md-4">
      <h1 class="text-center">Login</h1>
            <form action="login.php" method="POST">
      <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <input type="submit" class="btn btn-danger" value="Ingresar">
    </form>
      </div> 
      <div class="col-md-4"></div> 

    </div>
  </div>

  </body>
</html>
