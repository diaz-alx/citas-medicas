<?php
	
	class Citas_model {
		
		private $db;
		private $citas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->citas = array();
		}
		
		public function get_cita()
		{
			$sql = "SELECT * FROM citas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->citas[] = $row;
			}
			return $this->citas;
		}

		// usuario, fecha,hora,sucursal, especialidad, doctor, descripcion,
		// 
		public function insertar($usuario, $fecha, $hora, $sucursal, $especialidad, $doctor, $descripcion){
			
			$resultado = $this->db->query("INSERT INTO citas (usuario, fecha, hora, sucursal, especialidad, doctor, descripcion) VALUES ('$usuario', '$fecha', '$hora', '$sucursal', '$especialidad', '$doctor', '$descripcion')");
			
		}
		
		public function modificar($id, $usuario, $fecha, $hora, $sucursal, $especialidad, $doctor, $descripcion){
			
			$resultado = $this->db->query("UPDATE citas SET usuario='$usuario', fecha='$fecha', hora='$hora', sucursal='$sucursal', especialidad='$especialidad', doctor='$doctor', descripcion='$descripcion' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM citas WHERE id = '$id'");
			
		}
		
		public function get_citas($id)
		{
			$sql = "SELECT * FROM citas WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>