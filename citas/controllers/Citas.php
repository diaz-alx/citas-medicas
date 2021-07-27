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
			
			$nombre = $_POST['nombre'];
			$calorias = $_POST['calorias'];
			$tiempo = $_POST['tiempo'];
			$porcion = $_POST['porcion'];
			$imagen = $_POST['imagen'];
			$procedimiento = $_POST['procedimiento'];
			
			$citas = new Citas_model();
			$citas->insertar($nombre, $calorias, $tiempo, $porcion, $imagen, $procedimiento);
			$data["titulo"] = "Citas";
			$this->index();
		}
		
		public function modificar($id){
			
			$citas = new Citas_model();
			
			$data["id"] = $id;
			$data["citas"] = $citas->get_receta($id);
			$data["titulo"] = "Citas";
			require_once "views/citas/recetas_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$calorias = $_POST['calorias'];
			$tiempo = $_POST['tiempo'];
			$porcion = $_POST['porcion'];
			$imagen = $_POST['imagen'];
			$procedimiento = $_POST['procedimiento'];

			$citas = new Citas_model();
			$citas->modificar($id, $nombre, $calorias, $tiempo, $porcion, $imagen, $procedimiento);
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