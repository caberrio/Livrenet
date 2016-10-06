<?php
	session_start();

  	$conn = mysqli_connect("localhost", "root", "DsI6BMQeVzalCuEr", "livrenet");

	$conn->query("SET NAMES 'utf8'"); 

  	$query = "SELECT * FROM libro";

  	if($_GET){
  		if(isset($_GET['nombre']) && isset($_GET['categoria'])){
  			$nombre = $_GET['nombre'];
  			$categoria = $_GET['categoria'];
  			$query .= " WHERE nombre like '$nombre' AND categoria = $categoria";
  		}else{
  			if(isset($_GET['nombre'])){
	  			$nombre = $_GET['nombre'];
	  			$query .= " WHERE nombre like '$nombre'";
	  		}
	  		if(isset($_GET['categoria'])){
	  			$categoria = $_GET['categoria'];
	  			$query .= " WHERE categoria=$categoria";
	  		}
  		}
  	}

	if(!$conn){
		die("Error de conexión: ".mysqli_error($conn));
	}


	$result = $conn->query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Libros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="ti">
	<?php
		while($row = mysqli_fetch_array($result)){?>
			<div class="container">
				<div class="row">
				<div class="col-md-3">	</div>		
					<div class="col-md-6">
						<div class="row">
						  <div class="col-md-12">
						    <div class="thumbnail">
						      <img src=".\res\<?php echo $row[8];?>" alt="...">
						      <div class="caption">
						        <h4 class="text-center">Nombre: <?php echo $row[2];?></h4>
						        <p class="text-center">Autor: <?php echo $row[3];?></p>
						        <p class="text-center">Editorial: <?php echo $row[4];?></p>
						        <p class="text-center">Categoria: <?php if($row[6] == 1) echo "Académico";if($row[6] == 2) echo "Literatura"; if($row[6] == 3) echo "Filosofía";?></p>
						        <p class="text-center">Precio: <?php echo $row[9];?></p>
									<p><a href="#" class="btn btn-primary center-block" role="button">Comprar</a> 
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="col-md-3">	</div>
				</div>
			</div>
		
		<?php }
	?>
	<?php
		while($row = mysqli_fetch_array($result)){
			//var_dump($row);
			echo $row[0]."<br>";
			echo $row[1]."<br>";
			echo $row[3]."<br>";
			echo $row[4]."<br>";
			echo $row[5]."<br>";
			echo $row[6]."<br>";
			echo $row[7]."<br>";
			echo $row[8]."<br>";
			echo $row[9]."<br>";
			//$path = ".'\'res'\'$row[8]'";
			//echo '<img src=".res/'.$row[8]'">'; //"<img src=\".res'$row[8]\" alt=\"error\">"."<br><br>";
		}
	?>
</body>
</html>