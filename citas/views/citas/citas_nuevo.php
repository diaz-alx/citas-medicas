<!DOCTYPE html>
<html lang="es">
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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=recetas&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				
				<div class="form-group">
					<label for="calorias">Calorías</label>
					<input type="text" class="form-control" id="calorias" name="calorias" />
				</div>
				
				<div class="form-group">
					<label for="tiempo">Tiempo</label>
					<input type="text" class="form-control" id="tiempo" name="tiempo" />
				</div>
				
				<div class="form-group">
					<label for="porcion">Porción</label>
					<input type="text" class="form-control" id="porcion" name="porcion" />
				</div>
				<div class="form-group">
					<label for="imagen">Imagen</label>
					<input type="text" class="form-control" id="imagen" name="imagen" />
				</div>
				
				<!--<div class="form-group">
					<label for="ingrediente">Ingrediente</label>
					<input type="text" class="form-control" id="ingrediente" name="ingrediente" />
				</div>
				<div class="form-group">
					<label for="cantidad">Cantidad</label>
					<input type="text" class="form-control" id="cantidad" name="cantidad" />
				</div>
				<div class="form-group">
					<label for="medida">Medida</label>
					<input type="text" class="form-control" id="medida" name="medida" />
				</div>
				<div class="form-group">
					<label for="horario">Horario</label>
					<input type="text" class="form-control" id="horario" name="horario" />
				</div> -->
				<div class="form-group">
					<label for="procedimiento">Procedimiento</label>
					<input type="text" class="form-control" id="procedimiento" name="procedimiento" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>