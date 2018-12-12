<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masteruser extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->auth->restrict();
        $this->load->library('session');
        $this->load->model('mdl_masteruser');
        $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$jumlah_data = $this->mdl_masteruser->jml_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url('masteruser/index');
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['user'] = $this->mdl_masteruser->data($config['per_page'],$from);

		//$data['hotel'] = $this->mdl_masterhotel->get_data();
		$this->load->view('backend/header');
		$this->load->view('backend/user/index',$data);
		$this->load->view('backend/footer');
	}

	public function simpan()
	{

        $uname = $this->input->post('uname');
        $pass = md5($this->input->post('pass'));
        $level = $this->input->post('level');


        $data = array(
            'username' => $uname,
            'password' => $pass,
            'level' => $level
            );
        $this->mdl_masteruser->input_data($data,'user');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('masteruser','refresh');     

		
	}

	public function ubah(){

        $id = $this->input->post('id');
		$uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        $level = $this->input->post('level');

        if (!empty($pass)) {
            $data = array(
            'username' => $uname,
            'password' => md5($pass),
            'level' => $level
            );

        }else{
            $data = array(
            'username' => $uname,
            'level' => $level
            );
        }

        $where = array(
            'id' => $id
        );
        $this->mdl_masteruser->update_data($where,$data,'user');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Ubah');
        redirect('masteruser','refresh'); 

	}

    public function hapus($id){
        $where = array(
            'id' => $id
        );
        $this->mdl_masteruser->hapus_data($where,'user');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('masteruser','refresh'); 

    }


}
