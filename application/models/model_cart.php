<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_cart extends CI_Model{

    /** function that insert product in the cart or update cart
     * @param $id - id of the product
     */
	public function addToCart($id){
		
		$product=$this->getProductById($id);
		
		if($product){
			
			$data=array(
				'id' => $id,
				'qty' => 1,
				'price' => $product['price'],
				'name' => $product['title'],
				'cat_name' => $product['cat_name'],
				'machine_name' => $product['machine_name'],
				'main_image' => $product['main_image']
			);
			
			//part that check if product in the cart
			
			$in_cart=false;
			
			foreach ($this->cart->contents() as $item) {
				
				if($data['id'] == $item['id']){
					
					$in_cart=true;
				}
			}
			
			if($in_cart){
                $this->cart->update($data);
                return false;
            }
			else {
                $this->cart->insert($data);
                return true;
            }
		}

	}

    /**
     * return the product data from db
     * @param $id - id of product
     * @return - product data
     */
	private function getProductById($id){
		
		$product= null;

        $sql="SELECT c. machine_name cat_name, p.* FROM products p
			  JOIN  categories c ON c.id=p.categorie_id
		      WHERE  p.id=? ";
		
		$query=$this->db->query($sql,array($id));
		
		if($query->num_rows()>0){
			
			$product=$query->row_array();
		}

        //die_r($product);
		return $product;

	}

    /** save the order information in DB
     * @param $order - array from user data that make a order
     */
	public function orderSave($order){
		$uid=$this->session->userdata('uid');
        $email=$this->session->userdata('email');
        $name=$this->session->userdata('name');
		$sql="INSERT INTO orders VALUES ( '','$name','$email','$uid','$order',NOW() )";
		$this->db->query($sql);
		$this->cart->destroy();
	}
}
    