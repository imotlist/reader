<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backdoor extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('session');
		//$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('login_view');
		// $this->load->view('backend/header');
		// $this->load->view('backend/dashboard');
		// $this->load->view('backend/footer');
	}


	function getlogin() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$user = $this->auth->log_admin($user,$pass);
			if($user==true){
				$newdata = array(
						        'username'  => $user->username,
						        'password'     => $user->password
						   );
				$this->session->set_userdata($newdata);
				// $data['hasil']=1;
				// echo json_encode($data);
				redirect('dashboard', 'refresh');
				//print_r($newdata);
			}else{
				// $data['hasil'] = 0;
				// echo json_encode($data);

				echo "<script>alert('Username Dan Password Tidak Cocok Dengan Data Manapun'); window.location='".base_url()."backdoor';</script>";
				
			}
	}

	function logout(){
		//helper_log("logout", "Logout");
		$this->session->sess_destroy();
		redirect('backdoor','refresh');
    }

}
