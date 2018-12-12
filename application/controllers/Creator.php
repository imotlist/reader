<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creator extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_home');
		//$this->load->model('Auth_model');
	}

	public function index()
	{
		$data['creator'] = $this->mdl_home->getCreator()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/creator',$data);
		$this->load->view('frontend/footer');
	}

	function detail($id)
	{
		$data['c'] = $this->mdl_home->getCreatorById($id)->row();
		$data['novel'] = $this->mdl_home->getNovelCreator($id)->result();
		$data['comic'] = $this->mdl_home->getComicCreator($id)->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/detailCreator',$data);
		$this->load->view('frontend/footer');
	}

	function getSortComic(){
		$key = $this->input->post('key');
		$comic = $this->mdl_home->getSortComic($key)->result();
		$html ='<ul class="content-list-wrap premium">';
            	foreach($comic as $n){

	    $html.=    '<li class="content-item premium">
	                    <div class="item-thumb-wrap">
	                        <a class="thumb-wrap" href="'.base_url('series/comic/').$n->comic_id.'">

	                            <img src="'.base_url('assets').'/img/creator/'.$n->author_username.'/comic/'.$n->comic_cover.'" width="220" height="330">

	                            <div class="thumb-overlay"></div>
	                        </a>
	                    </div>
	                    <a class="preferred title" href="'.base_url('series/comic/').$n->comic_id.'">'.$n->comic_judul.'</a>
	                    <a class="sub-title" href="'.base_url('author/').$n->author_username.'">'.$n->author_nickname.'</a>

	                    <a class="tag badge" style="background-color: #86B666;" href="#">'.$n->comic_genre.'</a>

	                </li>';                
            	}
        $html.='</ul>';
        echo $html;
	}

}
