<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{

    public $post;

    function __construct()
    {

        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('model_user');

    }

    //-----------------------------------------------------//
    //-----------------       Login      ------------------//
    //-----------------------------------------------------//


    public function login()
    {

        if ($this->data['is_login']) redirect();

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_user_validate');

        //in this place external functions like trim doesn't work
        $this->post['user_email']=trim($this->input->post('email'));

        if ($this->form_validation->run() == false) {

            $this->data['title'] = 'Login Page';
            $this->data['content'] = $this->load->view('templates/login', null, true);
            $this->load->view('templates/main', $this->data);

        } else {

            $this->post = $this->input->post();

            $destination = $this->session->userdata('destination');

            if ($destination) {

                $this->session->unset_userdata('destination');
                redirect(site_url() . $destination);

            } else {

                redirect();

            }
        }

    }

    //-----------------------------------------------------//
    //----------------    Forgot password    --------------//
    //-----------------------------------------------------//

    public function forgot_password(){

        if ($this->data['is_login']) redirect();

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|callback_email_not_exist');

        if ($this->form_validation->run() == false) {

            $this->data['title'] = 'Forgot Your Password';
            $this->data['content'] = $this->load->view('templates/forgot_password', null, true);
            $this->load->view('templates/main', $this->data);

        } else {

            $result=$this->model_user->forgotPassword($this->input->post('email'));
            if($result){

                $this->session->set_flashdata('message','The email with new password sent to '.$this->input->post('email').'');
                redirect('user/forgot_password');

            }

        }

    }


    //-----------------------------------------------------//
    //-----------------       Logout      -----------------//
    //-----------------------------------------------------//


    public function logout()
    {

        $user_data = array(
            'uid' => '',
            'name' => '',
            'email' => '',
            'admin' => ''
        );
        $this->session->unset_userdata($user_data);
        $this->cart->destroy();
        redirect();

    }


    //-----------------------------------------------------//
    //-----------------   Sign Up System  ----------------//
    //---------------------------------------------------//

    public function sign_up()
    {

        if ($this->data['is_login']) redirect();

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|callback_email_exist');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {

            $this->data['title'] = 'Sign Up';
            $this->data['content'] = $this->load->view('templates/sign_up', null, true);
            $this->load->view('templates/main', $this->data);

        } else {
            $this->post = $this->input->post();
            //save user
            $is_register = $this->model_user->user_save($this->post);

            if ($is_register) {

                redirect();

            } else {

                redirect('user/login');

            }
        }
    }

//---------------------------------------------------//
//--------------- Edit Account Functions-------------//
//---------------------------------------------------//

    /**
     * show the edit account page
     */
   public function edit()
   {
       if ($this->data['is_admin']) redirect('home');

       /*  breadcrumbs */
       $this->breadcrumbs->unshift('Edit account', site_url('user/edit_name'));
       $this->breadcrumbs->unshift('Home', site_url('home') );

       $this->data['title'] = 'Edit your account settings';
       $this->data['content'] = $this->load->view('content/edit', null, true);
       $this->load->view('templates/main', $this->data);
   }

   //Ajax handler of all edit functions in the file -  forms_validate.js

    public function edit_name(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|xss_clean');
        $this->form_validation->set_rules('check1', 'confirmation ', 'required');

        if ($this->form_validation->run() == false) {

            $validate = array('result' => false, 'message' => validation_errors());

        } else {

            $this->post = $this->input->post();
            $name_update = $this->model_user->change_name($this->post);

            if ($name_update == 1) {

                $validate = array('result' => true, 'message' => 'The name was successfully updated!','name' =>$this->post['name'] );

            } elseif ($name_update == 'same_name') {
                $validate = array('result' => true, 'message' => 'This is the same name!');

            } else {
                $validate = array('result' => false, 'message' => 'The name was not updated. We have any technical problem, try later. Sorry for inconvenience!');
            }

        }
        echo json_encode($validate);
    }

    public function edit_email(){

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|callback_email_exist');
        $this->form_validation->set_rules('check2', 'confirmation ', 'required');

        if ($this->form_validation->run() == false) {

            $validate = array('result' => false, 'message' => validation_errors());

        } else {

            $this->post = $this->input->post();

            $email_update = $this->model_user->change_email($this->post);

            if ($email_update) {

                $validate = array('result' => true, 'email'=>$this->post['email'] );

            } else {
                $validate = array('result' => false, 'message'=>'The email was not updated. We have any technical problem, try later. Sorry for inconvenience!' );

            }

        }
        echo json_encode($validate);

    }

    public function edit_password(){

        $this->form_validation->set_rules('pwd', 'old password', 'trim|required|xss_clean|min_length[4]|callback_password_exist');
        $this->form_validation->set_rules('pwd1', 'new password', 'trim|required|xss_clean|min_length[4]|matches[pwd2]');
        $this->form_validation->set_rules('pwd2', 'confirmation of the new password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('check3', 'confirmation ', 'required');

        if ($this->form_validation->run() == false) {

            $validate = array('result' => false, 'message' => validation_errors());

        } else {

            $this->post = $this->input->post();

            $pass_update = $this->model_user->change_password($this->post);

            if ($pass_update) {

                $validate = array('result' => true, 'message'=>'Your password was successfully updated!' );

            } else {
                $validate = array('result' => false, 'message'=>'The password was not updated. We have any technical problem, try later. Sorry for inconvenience!' );

            }

        }
        echo json_encode($validate);

    }

    public function delete_account(){

    if (isset ($_POST['delete'])) {

        $del = $this->model_user->delete_account();//delete row in db

        if ($del) {
            //erase the session with user data and redirect
            $user_data = array(
                'uid' => '',
                'name' => '',
                'email' => '',
                'admin' => ''
            );

            $this->session->unset_userdata($user_data);
            $this->cart->destroy();
            $this->session->set_flashdata('message','The account was successfully deleted!');
            redirect('user/sign_up');
        }

      } else {

        if(!$this->data['is_login']){

            redirect('user/login');
        }
      }

 }


    /* --------------------- secondary functions--------------------------------- */

    public function user_validate($password)
    {

        $is_login = $this->model_user->user_validate($this->post['user_email'], $password);

        if ($is_login) {

            return true;
        }

        $this->form_validation->set_message('user_validate', 'Email/Password are incorrect');
        return false;
    }

    public function email_exist($user_email)
    {

        $is_exist = $this->model_user->email_exist($user_email);

        if (!$is_exist) {

            return true;
        }

        $this->form_validation->set_message('email_exist', 'Email is already exist');
        return false;
    }

    public function email_not_exist($email){

        $is_exist = $this->model_user->email_exist($email);
        if($is_exist){
            return true;
        }
        $message="Email not exist in our system<br> , <small>if you forget it,<a href=' ".site_url('user/sign_up')." ' > register</a> again</small>";
        $this->form_validation->set_message('email_not_exist', $message);
        return false;
    }

    public function password_exist($pwd)
    {

        $is_exist = $this->model_user->check_password($pwd);

        if ($is_exist) {

            return true;
        }

        $this->form_validation->set_message('password_exist', 'Password is not correct!');
        return false;

    }


}
