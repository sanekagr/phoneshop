<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stam extends MY_Controller {

	public function index()
	{
        $this->data['title']='PhoneShop - Stam';
        $this->data['content']=(make_hash(12345));
        $this->load->view('templates/main',$this->data);
	}
}
