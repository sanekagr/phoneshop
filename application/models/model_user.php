<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model
{


/*   -------------------- login functions ----------------------------   */
    /**
     * function that check the input data (email and password from user)
     * @param $email - received from user
     * @param $pass - received from user
     * @return bool
     */
    public function user_validate($email,$pass){

        $pass=make_hash($pass);

        $sql="SELECT * FROM users u
		      JOIN roles r ON u.id=r.uid
		      WHERE u.email=  ?
		      AND   u.password= ? LIMIT 1";

        $query=$this->db->query($sql,array($email, $pass));

        if($query->num_rows()>0){

            $user=$query->row_array();//output one row from table

            $set_user['uid']=$user['id'];
            $set_user['name']=$user['name'];
            $set_user['email']=$user['email'];
            $set_user['role']=$user['role'];

            return $this->set_login($set_user);

        }

        return false;

    }




    /**
     * function that creates session with user data
     * @param $user
     * @return bool
     */
    private function set_login($user){

        $user['admin']=($user['role']==1) ? true : false ;
        unset($user['role']);
        $this->session->set_userdata($user);//class session-Adding Custom Session Data as associative array
        //die_r($user);
        return true;

    }
    /* ----------------------   forgot password   ------------------------*/

    /** recovery password system
     * @param $email - user email
     * @return bool
     */
    public function forgotPassword($email){

        $this->load->helper('string');
        $this->load->library('email');
        //get a random password and encrypt it
        $new_password=random_string('alnum', 8);
        $hash_password=make_hash($new_password);

        //insert to db
        $data = array('password' => $hash_password);
        $this->db->where('email', $email);
        $this->db->update('users', $data);

        if($this->db->affected_rows()>0) {

            //send email
            $link=site_url('user/login');
            $message = "<div style='background:#E0E0E0; padding:15px; direction: ltr'><br><br>
            <h3>Your password is: $new_password</h3>
            For the security reasons change it in edit account section (push on user name in menu)<br><br>
            <a href='$link'><b>Link to the login system</b></a>

            </div>";

            $this->email->from('phoneshop@phoneshop.com','Phoneshop');
            $this->email->to($email);
            $this->email->subject('Phoneshop - password recovery');
            $this->email->message($message);
            $send = $this->email->send();

            if ($send) {

                return true;
            }
        }

        return false;

    }

    /*   -------------------- sign up functions ----------------------------   */
    /**
     * function that saves all user data in db, table 'user'
     * @param $post - received from user ($post['name'],$post['email'],$pass)
     * @return bool
     */
    public function user_save($post){

        //   save the data of new user in database

        $pass=make_hash($post['password']);
        $sql="INSERT INTO users VALUES ('',?,?,?)";
        $this->db->query($sql,array($post['name'],$post['email'],$pass));

        if($this->db->affected_rows() ){//if we inserted at least one row

            $id=$this->db->insert_id();

            $data=array( 'uid' => $id, 'role' => 2 );
            $this->db->insert('roles',$data);
            //insert specific data it the table 'users',
            //$data is array that include all variables of table, method with no xss clean

            //automatical login of new user

            $set_user['uid']=$id;
            $set_user['role']=2;//no admin
            $set_user['name']=$post['name'];
            $set_user['email']=$post['email'];


            $this->set_login($set_user);

            return true;

        }

        return false;
    }

    /**
     * function that checks if input email is in the system
     * @param $email $post['email'] from user
     * @return bool
     */
    public function email_exist($email){

        $sql="SELECT email FROM users WHERE email= ? ";
        $query=$this->db->query($sql,array($email));

        if($query->num_rows()>0){

            return true;
        }

        return false;
    }

    /* -------------------Edit account functions-------------------------*/

    public function change_name($post){

        if($post['name']==$this->session->userdata('name')){

            return 'same_name';

        }else {
            $email = $this->session->userdata('email');

            $sql="UPDATE users SET name=? WHERE email=?";
            $this->db->query($sql, array($post['name'],$email));

            if($this->db->affected_rows()>0){
                $this->session->set_userdata('name', $post['name']);
                return 1;
            }

        }

        return false;

    }

    public function change_email($post){

        $email = $this->session->userdata('email');
        $sql="UPDATE users SET email=? WHERE email=?";
        $this->db->query($sql, array($post['email'],$email));

        if($this->db->affected_rows()>0){
            $this->session->set_userdata('email', $post['email']);
            return true;
        }

        return false;

    }

    public function delete_account(){

        $email = $this->session->userdata('email');

        $this->db->delete('users', array('email' => $email));

        if($this->db->affected_rows()>0){

            return true;
        }

        return false;

    }

    public function check_password($pass){

        $email = $this->session->userdata('email');
        $pass=make_hash($pass);
        $sql="SELECT password FROM users WHERE email=? AND  password=?";
        $query=$this->db->query($sql,array($email,$pass));

        if($query->num_rows()>0 ){
            return true;
        }

        return false;
    }

    public function change_password($post){

        $email = $this->session->userdata('email');
        $this->db->set('password', make_hash($post['pwd2']));
        $this->db->where('email', $email);
        $this->db->update('users');

        if($this->db->affected_rows()>0){

            return true;
        }

        return false;

    }


}
