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
			
			<a href="index.php?c=recetas&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />


			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Detalles</th>
							
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["recetas"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombre"]."</td>";
							/*echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";*/
							echo "<td>Ver</td>";
							echo "<td><a href='index.php?c=recetas&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=recetas&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>