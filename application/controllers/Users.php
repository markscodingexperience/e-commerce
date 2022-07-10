<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

	public function index()
	{
		$this->load->view('signup/signup');
	}

	public function user_register(){
		$result = $this->User->test_registration_fields();
		if($result == 'Success'){
			$this->User->create_user($this->input->post());
			$this->auto_login_after_register();
		}
	}

	public function auto_login_after_register(){
		$data = $this->User->get_details($this->input->post('email'));
		$this->session->set_userdata('user_id', $data['id']);
		redirect('users/login');
	}

	public function login(){
		if($this->session->userdata('user_id')){
			if($this->session->userdata('user_id') == 1){
				$this->load->view('dashboard/dashboard');
			}else{
				$this->load->view('user/user');
			}
		}else{
			redirect("users/index");
		}
	}

	public function signin(){
		$current_user_id = $this->session->userdata('user_id');
		if($current_user_id == '2'){
			$this->load->view('user/user');
		}else if($current_user_id == '1'){
			$this->load->view('dashboard/dashboard');
		}
		$this->User->test_login_fields();
		redirect("/");
	}

	public function logout(){
		unset($_SESSION['user_id']);
        redirect("/");   
	}
}
