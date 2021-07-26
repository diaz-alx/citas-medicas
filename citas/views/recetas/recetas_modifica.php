<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=recetas&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["recetas"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="calorias">Calorias</label>
					<input type="text" class="form-control" id="calorias" name="calorias" value="<?php echo $data["recetas"]["calorias"]?>" />
				</div>
				
				<div class="form-group">
					<label for="tiempo">Tiempo</label>
					<input type="text" class="form-control" id="tiempo" name="tiempo" value="<?php echo $data["recetas"]["tiempo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="porcion">Porcion</label>
					<input type="text" class="form-control" id="porcion" name="porcion" value="<?php echo $data["recetas"]["porcion"]?>" />
				</div>
				
				<div class="form-group">
					<label for="imagen">Imagen</label>
					<input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $data["recetas"]["imagen"]?>" />
				</div>

				<div class="form-group">
					<label for="procedimiento">Procedimiento</label>
					<input type="text" class="form-control" id="procedimiento" name="procedimiento" value="<?php echo $data["recetas"]["procedimiento"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		