<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_contact_form extends CI_Model
{


    /**
     * insert user messages into the db table 'contact_log'
     * @param $post - input data from user
     * @return bool
     */
    public function insert_message($post)
    {

        $date=date('Y-m-d H:i:s');

        $sql="INSERT INTO contact_log VALUES ('',?,?,?,?,?,?)";

        $this->db->query($sql,array($post['name'],$post['email'],$post['phone'],$post['sel'],$post['message'],$date));

        if($this->db->affected_rows() ) {

            return true;
        }

        return false;

    }

}
