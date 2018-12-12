<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_auth');
	}

	public function index()
	{
		$this->load->view('login_view');
		// $this->load->view('backend/header');
		// $this->load->view('backend/dashboard');
		// $this->load->view('backend/footer');
	}


	function login() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$userdata = $this->mdl_auth->log_author($user,$pass)->row();
		//print_r($userdata);
			if($userdata==true){
				// $newdata = array(
				// 		        'username'  => $user->author_username,
				// 		        'password'     => $user->author_password
				// 		   );
				$this->session->set_userdata('log_data',$userdata);
				// $data['hasil']=1;
				// echo json_encode($data);
				redirect('home', 'refresh');
			}else{
				// $data['hasil'] = 0;
				// echo json_encode($data);

				echo "<script>alert('Username Dan Password Tidak Cocok Dengan Data Manapun'); window.location='".base_url()."';</script>";
				
			}
	}

	function signup() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$data = array(
			'author_username' => $user,
			'author_password' => md5($pass)
		);

		$path1 = './assets/img/creator/'.$user.'/novel';
		$path2 = './assets/img/creator/'.$user.'/comic';
		mkdir( $path1, 0777, true );
		mkdir( $path2, 0777, true );
		$this->mdl_auth->input_data($data,'author');
		$userdata = $this->mdl_auth->log_author($user,$pass)->row();
		$this->session->set_userdata('log_data',$userdata);
		redirect('home', 'refresh');

	}

	function logout(){
		//helper_log("logout", "Logout");
		$this->session->sess_destroy();
		redirect('home','refresh');
    }

}
