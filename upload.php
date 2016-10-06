<?php
  session_start();
  $conn = mysqli_connect('localhost', 'root', 'DsI6BMQeVzalCuEr', 'livrenet');
  if(!$conn){
    die('Error en base de datos '.mysqli_error($conn));
  }
  $conn->query("SET NAMES 'utf8'"); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subir Libro</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/stie.css">
  </head>
  <body>

    <?php
      if(isset($_POST['isbn'])){
        $isbn = $_POST['isbn'];
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $editorial = $_POST['editorial'];
        $tomo = $_POST['tomo'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $imagen = $_FILES['imagen'];
        $nombre_archivo = $imagen['name'];

        $usuario = $_SESSION['id'];
         if(move_uploaded_file($imagen['tmp_name'], 'res/'.$nombre_archivo)){
          //
          $result = mysqli_query($conn, "INSERT INTO libro VALUES (null, '$isbn', '$nombre', '$autor', '$editorial', '$tomo', '$categoria' ,'$usuario','$nombre_archivo','$precio')");
          if(!$result){
            die('Error: '.mysqli_error($conn));
          }
          echo "Libro subido con éxito.";
        }else{
          echo 'No se subió';
        }
      }else{
    ?>
    <div class="container">
      <div class="row">
          <div class=col-md-4></div> 
          <div class=col-md-4>
          <h2 class="text-center">Guarda Tu libro</h2>
              <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>ISBN</label>
        <input type="text" class="form-control" name="isbn">
      </div>
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor">
      </div>
      <div class="form-group">
        <label>Editorial</label>
        <input type="text" class="form-control" name="editorial">
      </div>
      <div class="form-group">
        <label>Tomo</label>
        <input type="text" class="form-control" name="tomo" placeholder="option"> 
      </div>
      <div class="form-group">
        <label>Categoría</label>
        <select name="categoria" class="form-control">
          <option>Seleccionar categoría</option>
          <?php
            $result = $conn->query('SELECT * FROM categoria');
            if(!$result){
              die('Error en base de datos: '.mysqli_error($conn));
            }
            while($row = mysqli_fetch_array($result)){
              ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
              <?php
            }
           ?>
        </select>
      </div>
      <div class="form-group">
        <label>Precio ($)</label>
        <input type="number" class="form-control" name="precio">
      </div>
      <div class="form-group">
        <label>Imagen para mostrar</label>
        <input type="file" class="form-control" name="imagen">
      </div>
      <input type="submit" value="Ingresar">
    </form>
          </div> 
          <div class=col-md-4></div> 
      </div>

    </div>
    <?php } ?>
  </body>
</html>  