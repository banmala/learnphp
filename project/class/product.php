<?php 

	class product extends database{
		function __construct(){
			$this->table = 'products';
			database::__construct();
		}

		public function addProduct($data=array(),$is_die=false){
			// debugger($data,true);
			return $this->addData($data,$is_die);
		}

		public function getProductbyId($product_id,$is_die=false){
			$args = array(
				'fields' => "productname,description,stock,status",
				'where' => array(
						'or' => array(
							'id' => $product_id,
						)
					)
			); 
			return $this->getData($args,$is_die);
		}

		public function getProduct($is_die=false){
			$args = array(
				'fields' => "id,productname,description,stock,status,rate",
				'where' => array(
						'or' => array(
							'status'=>'Active',
						)
					)
			); 
			return $this->getData($args,$is_die);
		}

		public function updateProductById($data,$id,$is_die=false){
			$args = array(
				'where' => array(
						'or' => array(
							'id' => $id,
						)
					)
			);
			return $this->updateData($data,$args,$is_die);
		}

		public function deleteProductById($id,$is_die=false){
			$args = array(
				'where' => array(
						'or' => array(
							'id' => $id,
						)
					)
			);
			return $this->deleteData($args,$is_die);
		}
	}
 ?>


