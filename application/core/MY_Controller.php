<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller {

    public $data=array('title'=>'PhoneShop');

    function __construct() {

        parent::__construct();
        //session->userdata('uid') - output of value in session , array value of index 'uid'
        $this->data['is_login']=($this->session->userdata('uid') == true) ? true : false;
        $this->data['is_admin']=($this->session->userdata('admin') == true) ? true : false;

        $this->load->model('model_products');

        $categories_menu=$this->model_products->getCategories();

        //load categories on "products" menu item
        if($categories_menu){

            $this->data['categories_menu']=$this->smarty->load('categories_menu',$categories_menu);


        }


    }

}
