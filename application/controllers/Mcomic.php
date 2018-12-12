<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcomic extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->auth->restrict();
        $this->load->library('session');
        $this->load->model('mdl_comic');
        $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$jumlah_data = $this->mdl_comic->jml_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url('mcomic/index');
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 20;
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['comic'] = $this->mdl_comic->data($config['per_page'],$from);

		//$data['hotel'] = $this->mdl_masterhotel->get_data();
		$this->load->view('backend/header');
		$this->load->view('backend/comic/index',$data);
		$this->load->view('backend/footer');
	}

    function create(){
        $data['author'] = $this->mdl_comic->get_author()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/comic/create',$data);
        $this->load->view('backend/footer');
    }

    function edit($id){
        $data['author'] = $this->mdl_comic->get_author()->result();
        $where = array(
            'comic_id' => $id
        );
        $data['d'] = $this->mdl_comic->get_edit($where,'comic')->row();
        $this->load->view('backend/header');
        $this->load->view('backend/comic/edit',$data);
        $this->load->view('backend/footer');
    }

	public function simpan()
	{
        $judul = $this->input->post('judul');
        $desc = $this->input->post('desc');
        $genre = $this->input->post('genre');
        $status = $this->input->post('status');
        $author = $this->input->post('author');

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $imgName = str_replace(' ','', strtolower($judul));
        $imageName = $imgName.'.'.$ext;
        $d = $this->mdl_comic->getAuthorById($author)->row();

        
        $config['upload_path']='./assets/img/creator/'.$d->author_username.'/comic/'; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imageName;

        $this->load->library('upload',$config); //call library upload 
        $this->upload->do_upload("file");

        $data = array(
            'comic_judul' => $judul,
            'comic_desc' => $desc,
            'comic_genre' => $genre,
            'comic_status' => $status,
            'comic_tgl' => date('Y-m-d'),
            'author_id' => $author
            );

        $this->mdl_comic->input_data($data,'comic');
        $last = $this->mdl_comic->getLast()->row();
        $dir = $last->comic_id;
        $path = './assets/img/creator/'.$d->author_username.'/comic/'.$dir;
        mkdir($path,0777,true);
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mcomic','refresh');     

		
	}

	public function update(){

        $id = $this->input->post('id');
		$judul = $this->input->post('judul');
        $desc = $this->input->post('desc');
        $genre = $this->input->post('genre');
        $status = $this->input->post('status');
        $author = $this->input->post('author');
            $data = array(
            'comic_judul' => $judul,
            'comic_desc' => $desc,
            'comic_genre' => $genre,
            'comic_status' => $status,
            'author_id' => $author

            );

        $where = array(
            'comic_id' => $id
        );
        $this->mdl_comic->update_data($where,$data,'comic');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Ubah');
        redirect('mcomic','refresh'); 

	}

    public function hapus($id){
        $where = array(
            'comic_id' => $id
        );
        $this->mdl_comic->hapus_data($where,'comic');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('mcomic','refresh'); 

    }

    //Detail
    function detail($id){
        $data['cp'] = $this->mdl_comic->getChapter($id)->result();
        $data['id'] = $id;
        $this->load->view('backend/header');
        $this->load->view('backend/comic/detail',$data);
        $this->load->view('backend/footer');
    }

    function createDetail($id){
        $data['id'] = $id;
        $this->load->view('backend/header');
        $this->load->view('backend/comic/createDetail',$data);
        $this->load->view('backend/footer');   
    }

    function editDetail($id){
        $where = array(
            'chapter_id' => $id
        );
        $data['d'] = $this->mdl_comic->get_edit($where,'comic_chapter')->row();
        //print_r($data['d']);
        $this->load->view('backend/header');
        $this->load->view('backend/comic/editDetail',$data);
        $this->load->view('backend/footer');   
    }

    private function set_upload_options($id,$ep)
    {   
        $d = $this->mdl_comic->getAuthorJoin($id)->row();
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/img/creator/'.$d->author_username.'/comic/'.$id.'/'.$ep.'/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }

    public function simpanDetail()
    {

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $ep = $this->mdl_comic->getChapter($id)->num_rows()+1;
        $d = $this->mdl_comic->getAuthorJoin($id)->row();
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        $nm ='';
        $path = './assets/img/creator/'.$d->author_username.'/comic/'.$id.'/'.$ep;
        mkdir($path,0777,true);
        for($i=0; $i<$cpt; $i++)
        {           
            $ext = pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);
            $_FILES['userfile']['name']= $i.'.'.$ext;
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options($id,$ep));
            $this->upload->do_upload();
            $nm.= $i.'.'.$ext;
            $nm.=',';
        }
        

        $data = array(
            'chapter_no' => $ep,
            'chapter_judul' => $judul,
            'chapter_content' => $nm,
            'chapter_date' => date('Y-m-d'),
            'comic_id' => $id
            );

        $this->mdl_comic->input_data($data,'comic_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mcomic/detail/'.$id,'refresh');             
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

        $this->mdl_comic->update_data($where,$data,'comic_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Tambahkan');
        redirect('mcomic/detail/'.$id,'refresh');             
    }

    public function hapusDetail($id,$idm){
        $where = array(
            'chapter_id' => $id
        );
        $this->mdl_comic->hapus_data($where,'comic_chapter');
        $this->session->set_flashdata('berhasil','Data Berhasil Di Hapus');
        redirect('mcomic/detail/'.$idm,'refresh'); 

    }

}
