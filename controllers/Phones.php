<?php
	
	class PhonesController {
		
		public function __construct(){
			require_once "models/PhonesModel.php";
		}
		
		public function index(){
			
			
			$phones = new Phones_model();
			$data["titulo"] = "Phones";
			$data["phones"] = $phones->get_phones();
			
			require_once "views/phones/phones.php";	
		}
		
		public function new(){   //nuevo
			
			$data["titulo"] = "Phones";
			require_once "views/phones/phones_new.php";
		}
		
		public function save(){    //Guarda
			
			$brand = $_POST['brand'];
			$model = $_POST['model'];
			$memory = $_POST['memory'];
			$company = $_POST['company'];
			$price = $_POST['price'];
			
			$phones = new Phones_model();
			$phones->insert($brand, $model, $memory, $company, $price);
			$data["titulo"] = "Phones";
			$this->index();
		}
		
		public function modify($id){   //Modificar
			
			$phones = new Phones_model();
			
			$data["id"] = $id;
			$data["phones"] = $phones->get_phone($id);
			$data["titulo"] = "Phones";
			require_once "views/phones/phones_modify.php";
		}
		
		public function actualize(){  //Actualizar

			$id = $_POST['id'];
			$brand = $_POST['brand'];
			$model = $_POST['model'];
			$memory = $_POST['memory'];
			$company = $_POST['company'];
			$price = $_POST['price'];
			

			$phones = new Phones_model();
			$phones->modify($id, $brand, $model, $memory, $company, $price);
			$data["titulo"] = "Phones";
			$this->index();
		}
		
		public function remove($id){  //Eliminar
			
			$phones = new Phones_model();
			$phones->remove($id);
			$data["titulo"] = "Phones";
			$this->index();
		}	
	}
?>