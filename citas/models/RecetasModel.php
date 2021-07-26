<?php
	
	class Citas_model {
		
		private $db;
		private $recetas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->recetas = array();
		}
		
		public function get_Recetas()
		{
			$sql = "SELECT * FROM recetas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->recetas[] = $row;
			}
			return $this->recetas;
		}

		// fecha,hora,sucursal,descripcion, especialidad, doctor
		// todo cambio que hagas en esta funcion se tiene que ver reflejado en las otras, los atributoss
		public function insertar($nombre, $sucursal, $tiempo, $fecha, $imagen, $procedimiento){
			
			$resultado = $this->db->query("INSERT INTO recetas (nombre, calorias, tiempo, fecha, imagen, procedimiento) VALUES ('$nombre', '$sucursal', '$tiempo', '$fecha', '$imagen', '$procedimiento')");
			
		}
		
		public function modificar($id, $nombre, $sucursal, $tiempo, $fecha, $imagen, $procedimiento){
			
			$resultado = $this->db->query("UPDATE recetas SET nombre='$nombre', calorias='$sucursal', tiempo='$tiempo', fecha='$fecha', imagen='$imagen', procedimiento='$procedimiento' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM recetas WHERE id = '$id'");
			
		}
		
		public function get_receta($id)
		{
			$sql = "SELECT * FROM recetas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>