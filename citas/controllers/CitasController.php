<?php
	
	class CitasController {
		
		public function __construct(){
			require_once "models/CitasModel.php";
		}
		
		public function index(){
			
			
			$citas = new Citas_model();
			$data["titulo"] = "Citas";
			$data["citas"] = $citas->get_citas();
			
			require_once "views/citas/citas.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Citas";
			require_once "views/citas/citas_nuevo.php";
		}
		
		public function guarda(){
			
			$usuario = $_POST['usuario'];
			$fecha = $_POST['fecha'];
			$hora = $_POST['hora'];
			$sucursal = $_POST['sucursal'];
			$especialidad = $_POST['especialidad'];
			$doctor = $_POST['doctor'];
			$descripcion = $_POST['descripcion'];

			$citas = new Citas_model();
			$citas->insertar($usuario, $fecha, $hora, $sucursal, $especialidad, $doctor, $descripcion);
			$data["titulo"] = "Citas";
			$this->index();
		}
		
		public function modificar($id){
			
			$citas = new Citas_model();
			$data["citas"] = $citas->get_cita($id);
			$data["titulo"] = "Citas";
			require_once "views/citas/citas_modifica.php";

		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$usuario = $_POST['usuario'];
			$fecha = $_POST['fecha'];
			$hora = $_POST['hora'];
			$sucursal = $_POST['sucursal'];
			$especialidad = $_POST['especialidad'];
			$doctor = $_POST['doctor'];
			$descripcion = $_POST['descripcion'];

			$citas = new Citas_model();
			$citas->modificar($id, $usuario, $fecha, $hora, $sucursal, $especialidad, $doctor, $descripcion);
			$data["titulo"] = "Citas";
			$this->index();
		}
		
		public function eliminar($id){
			
			$citas = new Citas_model();
			$citas->eliminar($id);
			$data["titulo"] = "Citas";
			$this->index();
		}	
	}
?>