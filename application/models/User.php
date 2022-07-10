<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function get_user_by_email($email){
        $query = "SELECT * FROM users WHERE email = ?";
        return $this->db->query($query, $this->security->xss_clean($email))->row_array();
    }

	public function test_registration_fields()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[10]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if(!$this->form_validation->run()) {
            return validation_errors();
        }
        else if($this->get_user_by_email($this->input->post('email'))) {
            return "Email already taken.";
        }else{
            return "Success";
            
        }
	}

    public function test_login_fields(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[10]');
        $email = $this->get_user_by_email($this->input->post('email'));
        if(!$this->form_validation->run() || $email == 'NULL' || $email == NULL) {
            return validation_errors();
        }else{
            return "Success";
        }
    }
    
    public function create_user($data){
        $query = "SELECT user_level FROM users WHERE EXISTS(SELECT * from users WHERE user_level = 1)";
        if($this->db->query($query) == '1'){
            $query = "INSERT INTO users(first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
            $values = array(
                $data['firstname'], 
                $data['lastname'], 
                $data['email'], 
                md5($data['password']), 
                1, 
                date('Y-m-d H:i:s'), 
                date('Y-m-d H:i:s')
            );
            return $this->db->query($query, $values);
        }else{
            $query = "INSERT INTO users(first_name, last_name, email, password, user_level, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
            $values = array(
                $data['firstname'], 
                $data['lastname'], 
                $data['email'], 
                md5($data['password']), 
                2, 
                date('Y-m-d H:i:s'), 
                date('Y-m-d H:i:s')
            );
            return $this->db->query($query, $values);
        }
    }

    public function get_details($data){
       return $this->db->query("SELECT * FROM users WHERE email = ?", array($data))->row_array();
    }


}
