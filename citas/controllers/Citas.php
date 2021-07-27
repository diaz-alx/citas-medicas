<?php
	
	class RecetasController {
		
		public function __construct(){
			require_once "models/RecetasModel.php";
		}
		
		public function index(){
			
			
			$recetas = new Recetas_model();
			$data["titulo"] = "Recetas";
			$data["recetas"] = $recetas->get_recetas();
			
			require_once "views/recetas/recetas.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Recetas";
			require_once "views/recetas/recetas_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$calorias = $_POST['calorias'];
			$tiempo = $_POST['tiempo'];
			$porcion = $_POST['porcion'];
			$imagen = $_POST['imagen'];
			$procedimiento = $_POST['procedimiento'];
			
			$recetas = new Recetas_model();
			$recetas->insertar($nombre, $calorias, $tiempo, $porcion, $imagen, $procedimiento);
			$data["titulo"] = "Recetas";
			$this->index();
		}
		
		public function modificar($id){
			
			$recetas = new Recetas_model();
			
			$data["id"] = $id;
			$data["recetas"] = $recetas->get_receta($id);
			$data["titulo"] = "Recetas";
			require_once "views/recetas/recetas_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$calorias = $_POST['calorias'];
			$tiempo = $_POST['tiempo'];
			$porcion = $_POST['porcion'];
			$imagen = $_POST['imagen'];
			$procedimiento = $_POST['procedimiento'];

			$recetas = new Recetas_model();
			$recetas->modificar($id, $nombre, $calorias, $tiempo, $porcion, $imagen, $procedimiento);
			$data["titulo"] = "Recetas";
			$this->index();
		}
		
		public function eliminar($id){
			
			$recetas = new Recetas_model();
			$recetas->eliminar($id);
			$data["titulo"] = "Recetas";
			$this->index();
		}	
	}
?>