<?php 
	/*$conn = mysqli_connect("localhost", "root", "", "livrenet");
	if(!$conn){
		die("Error al insertar. ERROR ".mysqli_error($conn));
	}
	$result = $conn->query("SELECT * FROM libros");
	while($row = mysqli_fetch_array($result)){
		echo $row["ISBN"]."<br>";
	}
	$categoria = "literario";
	$result = $conn->query("INSERT INTO categorias VALUES (NULL, '$categoria')");
	if(!$result)
		die("Error al insertar. ERROR ".mysqli_error($conn));
		*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Livrenet</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		if(isset($_GET['nombre'])){
			?>
				<h1>¡<?php echo $_GET['nombre'] ?> ingresado!</h1>
			<?php
		}else{
	?>
	<form method="GET" action="livrenet.php">
		<label>Ingrese nombre de categoría</label>
		<input type="text" name="nombre" value="" placeholder="Aquí nombre de categoría">
		<input type="submit" value="Ingresar">
	</form>
	<?php
		}
	?>
</body>
</html>