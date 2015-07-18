<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {


    function __construct() {

        parent::__construct();
        $this->load->model('model_contact_form');
        $this->load->library('form_validation');
        $this->load->library('email');
    }



	public function index()
	{
        /*  breadcrumbs */
        $this->breadcrumbs->unshift('contact us', site_url('contact'));
        $this->breadcrumbs->unshift('Home', site_url('home') );

        $this->data['title']='PhoneShop - Contact Us';
        $this->data['content']=$this->load->view('content/contact',null,true);
        $this->load->view('templates/main',$this->data);
	}

    public function send(){

        $this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|xss_clean');
        $this->form_validation->set_rules('sel', 'Select', 'xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        if($this->form_validation->run() == false){

            $validate=array('result'=>false,'message'=>validation_errors());

        }else{

            //insert into db
            $is_save = $this->model_contact_form->insert_message($this->input->post());

            if($is_save){
                $message="<div style='background:#E0E0E0; padding:15px;'><h3>Subject: ".$this->input->post('sel')."</h3>";
                $message.=$this->input->post('message')."</div>";

                //sending mail
                $this->email->from($this->input->post('email'), $this->input->post('name'));
                //admin email - defined in config/constants.php
                $this->email->to(ADMIN_EMAIL);
                $this->email->subject('Phoneshop: email from customer '.$this->input->post('name'));
                $this->email->message($message);
                $send=$this->email->send();

                if($send) {

                    $validate=array('result'=>true,'message'=>$this->input->post('name').' - Your message was sent successfully!');

                }else{

                    $validate=array('result'=>false,'message'=>'The message was not sent,sorry for interference, try later');
                    }
            }

        }
        echo json_encode($validate);
    }

}
