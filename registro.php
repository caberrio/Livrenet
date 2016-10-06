<?php 
	$conn = mysqli_connect("localhost", "root", "DsI6BMQeVzalCuEr", "Livrenet");
	if(!$conn){
		die("Error al insertar. ERROR ".mysqli_error($conn));
	}						
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Livrenet</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		/*if(isset($_GET['nombre'])){
			?>
				
			<?php
		}else{*/		
	?>
<div class="d"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
					<form method="GET" action="rh.php">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre" required>
					    </div>
					    <div class="form-group">
					    	<label>Apellido</label>		
							<input type="text" name="apellido" value="" class="form-control" placeholder="Ingrese apellido" required>
					    </div>
					    <div class="form-group">
					    	<label>Cedula</label>		
							<input type="number" name="cedula" value="" class="form-control" placeholder="Ingrese su cedula" required>
					    </div>
					    <div class="form-group">
					    	<label>Teléfono</label>		
							<input type="text" name="telefono" value="" class="form-control" placeholder="Ingrese su número de teléfono" required>
					    </div>
					    <div class="form-group">
					    	<label>Nombre de usuario</label>		
							<input type="text" name="username" value="" class="form-control" placeholder="Ingrese nombre de usuario" required>
					    </div>
					    <div class="form-group">
					    	<label>Contraseña</label>		
							<input type="password" name="password" value="" class="form-control" placeholder="Ingrese su contraseña" required>
					    </div>
					    <div class="form-group">
					    	<label>Repetir Contraseña</label>		
							<input type="password" name="password2" value="" class="form-control" placeholder="Verifique su contraseña" required>
					    </div>
					    <div class="form-group">
					    	<label>email</label>		
							<input type="text" name="email" value="" class="form-control" placeholder="Ingrese su email" required>
					    </div>
					    <div class="form-group">
							<label>fecha de nacimiento</label>		
							<input type="date" name="born" value="" class="form-control" placeholder="Ejemplo: 1999-12-31" required>
					    </div>
					    <div class="form-group">
					    	<input type="submit" class="form-control" id="btn-en" value="Ingresar">
					    </div>


					</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	
</body>
</html>

<!--

		
		<br>
		
		<br>

		<br>

		<br>

		<br>

		<br>
		<label>Repetir Contraseña</label>		
		<input type="password" name="password2" value="" placeholder="Verifique su contraseña" required>	
		<br>
		<label>email</label>		
		<input type="text" name="email" value="" placeholder="Ingrese su email" required>
		<br>
		<label>fecha de nacimiento</label>		
		<input type="date" name="born" value="" placeholder="Ejemplo: 1999-12-31" required>
		<br>		
		<input type="submit" value="Ingresar">

 -->