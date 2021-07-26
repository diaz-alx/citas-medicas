<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "gabriel123", "saga_familia");
			return $conexion;
			
		}
	}
?>