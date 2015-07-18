<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('model_products');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('input-search', 'Search Input', 'trim|required|xss_clean|min_length[2]');


        if ($this->form_validation->run() == false) {

            $this->smarty->assign('validation_errors', validation_errors());

        }else{

            $search_input=$this->input->post('input-search');

            $search_results=$this->model_products->productSearch2($search_input);
            //die_r($search_results);
            $this->smarty->assign('search_input', $search_input);
            $this->smarty->assign('search_results', $search_results);


        }

        /*  breadcrumbs */
        $this->breadcrumbs->unshift('search', site_url());
        $this->breadcrumbs->unshift('Home', site_url());


        $this->data['content'] = $this->smarty->load('search_results');
        $this->data['title'] = 'PhoneShop - Products Search';
        $this->load->view('templates/main', $this->data);
    }
}

