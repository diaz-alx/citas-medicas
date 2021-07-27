<?php
	
	class Citas_model {
		
		private $db;
		private $citas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->citas = array();
		}
		
		public function get_Recetas()
		{
			$sql = "SELECT * FROM citas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->citas[] = $row;
			}
			return $this->citas;
		}

		// fecha,hora,sucursal,descripcion, especialidad, doctor
		// todo cambio que hagas en esta funcion se tiene que ver reflejado en las otras, los atributoss
		public function insertar($nombre, $sucursal, $hora, $fecha, $especialidad, $procedimiento){
			
			$resultado = $this->db->query("INSERT INTO citas (nombre, calorias, hora, fecha, especialidad, procedimiento) VALUES ('$nombre', '$sucursal', '$hora', '$fecha', '$especialidad', '$procedimiento')");
			
		}
		
		public function modificar($id, $nombre, $sucursal, $hora, $fecha, $especialidad, $procedimiento){
			
			$resultado = $this->db->query("UPDATE citas SET nombre='$nombre', calorias='$sucursal', hora='$hora', fecha='$fecha', especialidad='$especialidad', procedimiento='$procedimiento' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM citas WHERE id = '$id'");
			
		}
		
		public function get_receta($id)
		{
			$sql = "SELECT * FROM citas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>