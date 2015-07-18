<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('model_products');
    }

    public function index()
    {
        $this->data['title'] = 'PhoneShop - Home';

        $products=$this->model_products->getProductsList();

        $this->data['content']=$this->smarty->load('home',$products,'products');
        $this->load->view('templates/main', $this->data);
    }
}

