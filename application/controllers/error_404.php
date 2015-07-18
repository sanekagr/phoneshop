<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends MY_Controller {

	public function index()
	{
        $this->data['title']='PhoneShop - 404';
        $this->data['content']=$this->load->view('content/404',null,true);
        $this->load->view('templates/main',$this->data);
	}
}
