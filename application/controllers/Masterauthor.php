<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masterauthor extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->auth->restrict();
        $this->load->library('session');
        $this->load->model('mdl_masterauthor');
        $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$jumlah_data = $this->mdl_masterauthor->jml_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url('masterauthor/index');
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['author'] = $this->mdl_masterauthor->data($config['per_page'],$from);

		//$data['hotel'] = $this->mdl_masterhotel->get_data();
		$this->load->view('backend/header');
		$this->load->view('backend/author/index',$data);
		$this->load->view('backend/footer');
	}

    function create(){
        
        $this->load->view('backend/header');
        $this->load->view('backend/author/create');
        $this->load->view('backend/footer');
    }

    function edit($id){
        $where = array(
            'author_id' => $id
        );
        $data['d'] = $this->mdl_masterauthor->get_edit($where,'author')->row();
        $this->load->view('backend/header');
        $this->load->view('backend/author/edit',$data);
        $this->load->view('backend/footer');
    }

	public function simpan()
	{

        $uname = $this->input->post('uname');
        $pass = md5($this->input->post('pass'));
        $user = $this->input->post('user');
        $email = $this->input->post('email');
        $full = $this->input->post('full');
        $nick = $this->input->post('nick');
        $birth = $this->input->post('tgl');
        $gender = $this->input->post('gender');


        $data = array(
            'author_username' => $user,
            'author_password' => $pass,
            'author_email' => $email,
            'author_full_name' => $full,
            'author_nickname' => $nick,
            'author_birthdate' => $birth,
            'author_gender' => $gender,
            );
        $this->mdl_masterauthor->input_data($data,'author');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('masterauthor','refresh');     

		
	}

	public function update(){

        $id = $this->input->post('id');
		$user = $this->input->post('user');
        $email = $this->input->post('email');
        $full = $this->input->post('full');
        $nick = $this->input->post('nick');
        $birth = $this->input->post('tgl');
        $gender = $this->input->post('gender');
            $data = array(
            'author_username' => $user,
            'author_email' => $email,
            'author_full_name' => $full,
            'author_nickname' => $nick,
            'author_birthdate' => $birth,
            'author_gender' => $gender,

            );

        $where = array(
            'author_id' => $id
        );
        $this->mdl_masterauthor->update_data($where,$data,'author');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Ubah');
        redirect('masterauthor','refresh'); 

	}

    public function hapus($id){
        $where = array(
            'author_id' => $id
        );
        $this->mdl_masterauthor->hapus_data($where,'author');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('masterauthor','refresh'); 

    }


}
