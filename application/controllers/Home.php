<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_home');
		//$this->load->model('Auth_model');
	}

	public function index()
	{
		$data['novel'] = $this->mdl_home->get_data_novel(10)->result();
		$data['comic'] = $this->mdl_home->get_data_comic(10)->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/content',$data);
		$this->load->view('frontend/footer');
	}

	function updateProfil(){
		$id = $this->input->post('id');
		$nick = $this->input->post('nick');
		$full = $this->input->post('full');
		$email = $this->input->post('email');

		$data = array(
			'author_nickname' => $nick,
			'author_full_name' => $full,
			'author_email' => $email
		);
		$where = array(
			'author_id' => $id
		);
		$this->mdl_home->update_data($where,$data,'author');
		redirect('creator/detail/'.$id,'refresh');
	}

	function gantiFoto(){
		$id = $this->input->post('id');
		$username = $this->input->post('uname');
		$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		$config['upload_path']='./assets/img/profile/'; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['overwrite'] = TRUE;
        $config['file_name'] = $username.'.'.$ext;
        
        $data = array(
			'author_profile' => $username.'.'.$ext
		);
		$where = array(
			'author_id' => $id
		);
		$this->mdl_home->update_data($where,$data,'author');
        $this->load->library('upload',$config); //call library upload 
        $this->upload->do_upload("file");
        redirect('home','refresh');
	}

}
