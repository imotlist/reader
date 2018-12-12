<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnovel extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->auth->restrict();
        $this->load->library('session');
        $this->load->model('mdl_novel');
        $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$jumlah_data = $this->mdl_novel->jml_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url('mnovel/index');
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['novel'] = $this->mdl_novel->data($config['per_page'],$from);

		//$data['hotel'] = $this->mdl_masterhotel->get_data();
		$this->load->view('backend/header');
		$this->load->view('backend/novel/index',$data);
		$this->load->view('backend/footer');
	}

    function create(){
        $data['author'] = $this->mdl_novel->get_author()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/novel/create',$data);
        $this->load->view('backend/footer');
    }

    function edit($id){
        $data['author'] = $this->mdl_novel->get_author()->result();
        $where = array(
            'novel_id' => $id
        );
        $data['d'] = $this->mdl_novel->get_edit($where,'novel')->row();
        $this->load->view('backend/header');
        $this->load->view('backend/novel/edit',$data);
        $this->load->view('backend/footer');
    }

	public function simpan()
	{

        $judul = $this->input->post('judul');
        $desc = $this->input->post('desc');
        $genre = $this->input->post('genre');
        $status = $this->input->post('status');
        $author = $this->input->post('author');


        $data = array(
            'novel_judul' => $judul,
            'novel_desc' => $desc,
            'novel_genre' => $genre,
            'novel_status' => $status,
            'novel_tgl' => date('Y-m-d'),
            'author_id' => $author
            );

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $imgName = str_replace(' ','', strtolower($judul));
        $imageName = $imgName.'.'.$ext;
        $d = $this->mdl_novel->getAuthorById($author)->row();

        
        $config['upload_path']='./assets/img/creator/'.$d->author_username.'/novel/'; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imageName;

        $this->load->library('upload',$config); //call library upload 
        $this->upload->do_upload("file");

        $this->mdl_novel->input_data($data,'novel');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mnovel','refresh');     

		
	}

	public function update(){

        $id = $this->input->post('id');
		$judul = $this->input->post('judul');
        $desc = $this->input->post('desc');
        $genre = $this->input->post('genre');
        $status = $this->input->post('status');
        $author = $this->input->post('author');
            $data = array(
            'novel_judul' => $judul,
            'novel_desc' => $desc,
            'novel_genre' => $genre,
            'novel_status' => $status,
            'author_id' => $author

            );

        $where = array(
            'novel_id' => $id
        );
        $this->mdl_novel->update_data($where,$data,'novel');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Ubah');
        redirect('mnovel','refresh'); 

	}

    public function hapus($id){
        $where = array(
            'novel_id' => $id
        );
        $this->mdl_novel->hapus_data($where,'novel');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('mnovel','refresh'); 

    }

    //Detail
    function detail($id){
        $data['cp'] = $this->mdl_novel->getChapter($id)->result();
        $data['id'] = $id;
        $this->load->view('backend/header');
        $this->load->view('backend/novel/detail',$data);
        $this->load->view('backend/footer');
    }

    function createDetail($id){
        $data['id'] = $id;
        $this->load->view('backend/header');
        $this->load->view('backend/novel/createDetail',$data);
        $this->load->view('backend/footer');   
    }

    function editDetail($id){
        $where = array(
            'chapter_id' => $id
        );
        $data['d'] = $this->mdl_novel->get_edit($where,'novel_chapter')->row();
        //print_r($data['d']);
        $this->load->view('backend/header');
        $this->load->view('backend/novel/editDetail',$data);
        $this->load->view('backend/footer');   
    }

    public function simpanDetail()
    {

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $content = $this->input->post('content');
        $ep = $this->mdl_novel->getChapter($id)->num_rows();

        $data = array(
            'chapter_no' => $ep+1,
            'chapter_judul' => $judul,
            'chapter_content' => $content,
            'chapter_date' => date('Y-m-d'),
            'novel_id' => $id
            );

        $this->mdl_novel->input_data($data,'novel_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mnovel/detail/'.$id,'refresh');             
    }

    public function updateDetail()
    {

        $id = $this->input->post('id');
        $idc = $this->input->post('idc');
        $judul = $this->input->post('judul');
        $content = $this->input->post('content');

        $data = array(
            'chapter_judul' => $judul,
            'chapter_content' => $content,
            );
        $where = array(
            'chapter_id' => $idc
        );

        $this->mdl_novel->update_data($where,$data,'novel_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mnovel/detail/'.$id,'refresh');             
    }

    public function hapusDetail($id,$idm){
        $where = array(
            'chapter_id' => $id
        );
        $this->mdl_novel->hapus_data($where,'novel_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('mnovel/detail/'.$idm,'refresh'); 

    }


}
