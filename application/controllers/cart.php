<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller{
	
     function __construct(){
     	
     	parent::__construct();
         $this->cart->product_name_rules = '[:print:]';
		$this->load->model('model_cart');
         $this->load->library('email');
     }

    /**
     * Go to the checkout page
     */
	 public function checkout(){

         /*  breadcrumbs */
        $this->breadcrumbs->unshift('checkout', site_url('cart/checkout'));
        $this->breadcrumbs->unshift('Home', site_url('home') );

	 	$this->data['content']=$this->load->view('content/checkout',null,true);			
		$this->load->view('templates/main',$this->data);
	 }

    /**
     * Add item to cart
     */
	 public function addToCart()
	{
		$id=$this->input->get('id',true);//get('id',true)-clean xss attacks also if second paramenter configed - TRUE

		if($id){

			$result=$this->model_cart->addToCart($id);

            if($result) {

                echo $this->cart->total_items();
            }else{

                echo 'You already have this item in the cart';
            }

		}
		
	}

    /**
     *  update cart function from received data of user
     */
	public function updateCart(){
		$cart_details=$this->input->post(null,true);
		$this->cart->update($cart_details);
		redirect(site_url().'cart/checkout/');
	}

    /**
     * function that removes specific item
     */
    public function removeItem(){

        $rowid=$id=$this->input->get('rowid',true);

        if($rowid) {

            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );

            $this->cart->update($data);
        }
    }

    /**
     * remove all items from the cart
     */
    function empty_cart(){
        $this->cart->destroy(); // Destroy all cart data
    }

    /**
     * Show order confirmation
     */
   public function order(){

    	if(!$this->data['is_login']){//data['is_login]-in core/MY_Controller
    	
    		$this->session->set_userdata('destination','cart/order/');
    		redirect(site_url().'user/login/');
			
    	}else{
    		
			$order=$this->cart->contents();//build array from products in cart
            $total=$this->cart->total();
            $name=$this->session->userdata('name');

            //die_r($order );

			if(count($order) > 0){

                /*  breadcrumbs */
                $this->breadcrumbs->unshift('order', site_url('cart/order'));
                $this->breadcrumbs->unshift('Home', site_url('home') );
				
				$order2=json_encode($order);
				$this->model_cart->orderSave($order2);//save to the db

                $this->smarty->assign('name',$name);
                $this->smarty->assign('total',$total);
                $this->smarty->assign('ord',$order);

                $this->send_mail();//send mail

                //show order message
                $this->data['title']='Photoshop - Order Confirmation';
                $this->data['content']=$this->smarty->load('order');
                $this->load->view('templates/main',$this->data);
							
			}else{
				
				redirect(site_url().'products/');
				
			}
    	}
	}

    /**
     * send mail to the user after the order
     */
    public function send_mail(){
        //get the smarty template
        $message= $this->smarty->fetch('order2.tpl');

        //$email='ADMIN_EMAIL';//for the test
        $email=$this->session->userdata('email');//real value

        $this->email->from('phoneshop@phoneshop.co.il', 'Phoneshop');
        $this->email->to($email);
        $this->email->subject('Phoneshop - Order Confirmation');
        $this->email->message($message);

        $this->email->send();

    }
		
}
