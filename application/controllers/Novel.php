<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novel extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_home');
		//$this->load->model('Auth_model');
	}

	public function index()
	{
		$data['novel'] = $this->mdl_home->get_novel()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/listNovel',$data);
		$this->load->view('frontend/footer');
	}

	function getSortNovel(){
		$key = $this->input->post('key');
		$novel = $this->mdl_home->getSortNovel($key)->result();
		$html ='<ul class="content-list-wrap premium">';
            	foreach($novel as $n){

	    $html.=    '<li class="content-item premium">
	                    <div class="item-thumb-wrap">
	                        <a class="thumb-wrap" href="'.base_url('series/novel/').$n->novel_id.'">

	                            <img src="'.base_url('assets').'/img/creator/'.$n->author_username.'/novel/'.$n->novel_cover.'" width="220" height="330">

	                            <div class="thumb-overlay"></div>
	                        </a>
	                    </div>
	                    <a class="preferred title" href="'.base_url('series/novel/').$n->novel_id.'">'.$n->novel_judul.'</a>
	                    <a class="sub-title" href="'.base_url('author/').$n->author_username.'">'.$n->author_nickname.'</a>

	                    <a class="tag badge" style="background-color: #86B666;" href="#">'.$n->novel_genre.'</a>

	                </li>';                
            	}
        $html.='</ul>';
        echo $html;
	}

}
