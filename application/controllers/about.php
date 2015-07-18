<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

	public function index()
	{

        /*  breadcrumbs */
        $this->breadcrumbs->unshift('about us', site_url('about'));
        $this->breadcrumbs->unshift('Home', site_url('home') );

        $this->data['title']='PhoneShop - About';
        $this->data['content']=$this->load->view('content/about',null,true);
        $this->load->view('templates/main',$this->data);
	}
}
