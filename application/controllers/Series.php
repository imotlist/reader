<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Series extends CI_Controller {

    public $log_data = null; 

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_series');
		//$this->load->model('Auth_model');
        $this->log_data = $this->session->userdata('log_data');
	}

    function getLog() {
        // returning the $id property
        return $this->log_data;
    }

	public function index()
	{
		$log_dat = $this->session->userdata('log_data');
		if(empty($log_dat)){
			redirect('home','refresh');
		}else{
			//$data['novel'] = $this->mdl_home->get_data_limit(10)->result();
			$this->load->view('frontend/header');
			$this->load->view('frontend/dashboard');
			$this->load->view('frontend/footer');
		}
	}

    function create($jenis){
        if($jenis=='novel'){
            $this->load->view('frontend/header');
            $this->load->view('frontend/createNovel');
            $this->load->view('frontend/footer');
        }else{
            $this->load->view('frontend/header');
            $this->load->view('frontend/createComic');
            $this->load->view('frontend/footer');
        }
    }

    function novel($id){
        $data['auth'] = $this->getLog();
        $data['novel'] = $this->mdl_series->getNovel($id)->row();
        $data['series'] = $this->mdl_series->getNovelDetail($id)->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/readNovel',$data);
        $this->load->view('frontend/footer');        
    }

    function comic($id){
        $data['auth'] = $this->getLog();
        $data['comic'] = $this->mdl_series->getComic($id)->row();
        $data['series'] = $this->mdl_series->getComicDetail($id)->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/readComic',$data);
        $this->load->view('frontend/footer');        
    }


    function editnovel($id){
        $data['novel'] = $this->mdl_series->getNovel($id)->row();
        $this->load->view('frontend/header');
        $this->load->view('frontend/editNovel',$data);
        $this->load->view('frontend/footer');        
    }

    function editcomic($id){
        $data['comic'] = $this->mdl_series->getComic($id)->row();
        $this->load->view('frontend/header');
        $this->load->view('frontend/editComic',$data);
        $this->load->view('frontend/footer');        
    }

    function simpanNovel(){
        $title = $this->input->post('title');
        $desc = $this->input->post('description');
        $genre = $this->input->post('genres');
        $author_id = $this->getLog()->author_id;
        $username = $this->getLog()->author_username;
        
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        $imgName = str_replace(' ','', strtolower($title));
        $imageName = $imgName.'.'.$ext;
        $data = array(
            'novel_judul' => $title,
            'novel_desc' => $desc,
            'novel_status' => 1,
            'novel_genre' => $genre,
            'novel_cover' => $imageName,
            'novel_tgl' => date('Y-m-d'),
            'author_id' => $author_id
        );

        //print_r();
        $this->mdl_series->input_data($data,'novel');
        
        $config['upload_path']='./assets/img/creator/'.$username.'/novel/'; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['file_name'] = $imageName;
         
        $this->load->library('upload',$config); //call library upload 

        if($this->upload->do_upload("file")){ //upload file
            echo "Iso Paleng";
        }else{
            echo "Gak Kenek Ae";
        }
        //move_uploaded_file($_FILES['file']['tmp_name'], base_url('assets/img/creator/'.$username.'/novel/'.$imageName));
        
        //echo base_url('assets/img/creator/'.$username.'/novel/'.$imageName);

    }

    function updateNovel(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $ext = $this->input->post('ext');
        $desc = $this->input->post('desc');
        $genre = $this->input->post('genre');
        $author_id = $this->getLog()->author_id;
        $imgName = str_replace(' ','', strtolower($title));
        $imageName = $imgName.'.'.$ext;
        if(!empty($imageName)){
            $data = array(
                'novel_judul' => $title,
                'novel_desc' => $desc,
                'novel_status' => 1,
                'novel_genre' => $genre,
                'novel_cover' => $imageName,
                'author_id' => $author_id
            );
        }else{
            $data = array(
                'novel_judul' => $title,
                'novel_desc' => $desc,
                'novel_status' => 1,
                'novel_genre' => $genre,
                'author_id' => $author_id
            );
        }

        $where = array(
            'novel_id' => $id
        );
        //print_r();
        $this->mdl_series->update_data($where,$data,'novel');
        redirect('fndashboard','refresh');

    }

    function deletenovel($id){
        $where = array(
            'novel_id' => $id
        );
        $this->mdl_series->hapus_data($where,'novel');
        redirect('fndashboard','refresh');
    }

    function simpanNovelEpisode(){
        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        $novel_id = $this->input->post('id');
        $author_id = $this->getLog()->author_id;
        $ep = $this->mdl_series->getNovelDetail($novel_id)->num_rows()+1;
        $data = array(
            'chapter_no' => $ep,
            'chapter_judul' => $title,
            'chapter_content' => $desc,
            'chapter_date' => date('Y-m-d'),
            'novel_id' => $novel_id
        );

        // //print_r();
        $this->mdl_series->input_data($data,'novel_chapter');
    

    }

    function ubahNovelEpisode(){
        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        $chapter_id = $this->input->post('id');
        $data = array(
            'chapter_judul' => $title,
            'chapter_content' => $desc
        );
        $where = array(
            'chapter_id' => $chapter_id
        );

        // //print_r();
        $this->mdl_series->update_data($where,$data,'novel_chapter');  

    }

    function addNovelEpisode($id){
        $data['novel'] = $this->mdl_series->getNovel($id)->row();
        $data['ep'] = $this->mdl_series->getNovelDetail($id)->num_rows()+1;
        $this->load->view('frontend/header');
        $this->load->view('frontend/createEpisodeNovel',$data);
        $this->load->view('frontend/footer'); 
    }

    function editNovelEpisode($id){
        $data['eps'] = $this->mdl_series->getNovelSeries($id)->row();
        $data['novel'] = $this->mdl_series->getNovel($data['eps']->novel_id)->row();
        $this->load->view('frontend/header');
        $this->load->view('frontend/editEpisodeNovel',$data);
        $this->load->view('frontend/footer'); 
    }

    function getNovelSeries(){
        $cpid = $this->input->post('id');
        $row = $this->mdl_series->getNovelSeries($cpid)->row();
        $html ='<div class="episode">
                    <section class="current-sc">
                        <header class="ep-header epub">
                            <h1 class="title" id="episode-1263616-title">'.$row->chapter_judul.'</h1>
                        </header>
                        <article class="ep-contents ep-html-contents " style="min-height: 0px;">
                            <p>'.$row->chapter_content.'</p>
                        </article>
                        <!-- tapas.io - 728x90 Static (5b55ffd346e0fb0001372f9e) - 728x90 - Place in <BODY> of page where ad should appear -->
                        <div class="vm-placement vm-top force mtl" data-id="5b55ffd346e0fb0001372f9e" data-episode-id="1263616"></div>
                        <!-- / tapas.io - 728x90 Static (5b55ffd346e0fb0001372f9e) -->
                        <footer class="ep-footer clearfix">

                            <section class="footer-section bottom tabled">
                                <div class="left-side">
                                    <div class="comments-wrap">
                                        <section class="comment-section  " id="episode-comment-1263616" data-base-url="/comment/1263616" data-episode-id="1263616" data-series-id="125732" data-order-by="best" data-comment-cnt="0">
                                            <header class="comment-header">
                                                <span class="comment-cnt">Comments</span>
                                            </header>
                                            <div class="write-box">
                                                <div class="avatar-wrap">
                                                    <a class="act holder">
                                                        <img src="https://lh3.googleusercontent.com/a-/AN66SAzqSkUz4oVWSUWsu1nJE5ne6bJgZG-Ddk9mO-Fw83c" width="50" height="50" class="circle">
                                                    </a>
                                                    <a class="me">
                                                        <img src="https://lh3.googleusercontent.com/a-/AN66SAzqSkUz4oVWSUWsu1nJE5ne6bJgZG-Ddk9mO-Fw83c" alt="imotlist" width="50" height="50" class="circle">
                                                    </a>
                                                </div>
                                                <div class="input-outer">
                                                    <div class="input-wrap collapsed">
                                                        <div class="left-arrow"></div>
                                                        <div class="left-arrow in"></div>
                                                        <div class="inner">
                                                            <textarea class=" autogrow comment-body" data-where="Comment" placeholder="Leave a note for imotlist" autocomplete="off" data-type="parent" maxlength="2000"></textarea>
                                                        </div>
                                                        <a href="#!/close" class="close">
                                                            <i class="sp-btn-x"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/tp-template" id="tpEditBody-1263616">
                                                <div class="edit-box">
                                                    <textarea class="autogrow edit-body {{type}}" data-comment-id="{{commentId}}" placeholder="Leave a {{holder}}" autocomplete="off" maxlength="2000">{{body}}</textarea>
                                                    <p>
                                                        <a class="txt-btn cancel-edit" href="#!/cancel-edit">cancel</a>
                                                    </p>
                                                </div>
                                            </script>
                                            <script type="text/tp-template" id="tpReply-1263616">
                                                <div class="reply-write hidden">
                                                    <div class="reply-body-wrap">
                                                        <textarea class="autogrow reply-body" data-type="reply" placeholder="Leave a reply" autocomplete="off" maxlength="2000">{{body}}</textarea>
                                                        <p>
                                                            <a class="cancel-reply txt-btn" href="#!/cancel-reply">cancel</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </script>
                                        </section>

                                    </div>
                                </div>
                            </section>
                        </footer>
                    </section>
                    <section class="ads end-of-series">
                        <div class="inner-wrap">
                            <div class="da-block">
                                <div class="inner da-zone">
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-0.png">

                                        <iframe class="ad-iframe" id="a56ef9d" name="a56ef9d" src="/delivery/afr.php?zoneid=167&amp;cb=56ef9" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a56ef9d&amp;cb=56ef9" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=167&amp;cb=56ef9&amp;n=a56ef9d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-1.png">

                                        <iframe class="ad-iframe" id="a85522d" name="a85522d" src="/delivery/afr.php?zoneid=1&amp;cb=85522" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a85522d&amp;cb=85522" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=1&amp;cb=85522&amp;n=a85522d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-2.png">

                                        <iframe class="ad-iframe" id="a1e2f9d" name="a1e2f9d" src="/delivery/afr.php?zoneid=2&amp;cb=1e2f9" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a1e2f9d&amp;cb=1e2f9" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=2&amp;cb=1e2f9&amp;n=a1e2f9d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>';
        echo $html;
    }

    function getComicSeries(){
        // $username = $this->getLog()->author_username;
        $cpid = $this->input->post('id');
        $row = $this->mdl_series->getComicSeries($cpid)->row();
        $d = $this->mdl_series->get_author($row->comic_id)->row();
        $img = explode(',', $row->chapter_content);
        $lenght =  count($img);
        $ht = '';

        for($i=0; $i < $lenght-1 ; $i++){
            $ht.= '<center><img src="'.base_url('assets/img/creator/'.$d->author_username.'/comic/'.$row->comic_id.'/'.$row->chapter_no.'/'.$img[$i]).'" width="100%"></center><br>';
        }
        $html ='<div class="episode">
                    <section class="current-sc">
                        <header class="ep-header epub">
                            <h1 class="title" id="episode-1263616-title">'.$row->chapter_judul.'</h1>
                        </header>
                        <article class="ep-contents ep-html-contents " style="min-height: 0px;">
                            <p>'.$ht.'</p>
                        </article>
                        <!-- tapas.io - 728x90 Static (5b55ffd346e0fb0001372f9e) - 728x90 - Place in <BODY> of page where ad should appear -->
                        <div class="vm-placement vm-top force mtl" data-id="5b55ffd346e0fb0001372f9e" data-episode-id="1263616"></div>
                        <!-- / tapas.io - 728x90 Static (5b55ffd346e0fb0001372f9e) -->
                        
                    </section>
                    <section class="ads end-of-series">
                        <div class="inner-wrap">
                            <div class="da-block">
                                <div class="inner da-zone">
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-0.png">

                                        <iframe class="ad-iframe" id="a56ef9d" name="a56ef9d" src="/delivery/afr.php?zoneid=167&amp;cb=56ef9" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a56ef9d&amp;cb=56ef9" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=167&amp;cb=56ef9&amp;n=a56ef9d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-1.png">

                                        <iframe class="ad-iframe" id="a85522d" name="a85522d" src="/delivery/afr.php?zoneid=1&amp;cb=85522" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a85522d&amp;cb=85522" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=1&amp;cb=85522&amp;n=a85522d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                    <div class="rectangle-da">

                                        <img class="da-placeholder hidden" width="300" height="250" src="https://d30womf5coomej.cloudfront.net/resources/images/adslots/adslot-2.png">

                                        <iframe class="ad-iframe" id="a1e2f9d" name="a1e2f9d" src="/delivery/afr.php?zoneid=2&amp;cb=1e2f9" frameborder="0" scrolling="no" width="300" height="250" style="display: none !important;">
                                            <a href="/delivery/ck.php?n=a1e2f9d&amp;cb=1e2f9" target="_blank">
                                                <img src="/delivery/avw.php?zoneid=2&amp;cb=1e2f9&amp;n=a1e2f9d" border="0" alt="" />
                                            </a>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>';
        echo $html;
    }


    //comic

    function simpanComic(){
        $title = $this->input->post('title');
        $desc = $this->input->post('description');
        $genre = $this->input->post('genres');
        $author_id = $this->getLog()->author_id;
        $username = $this->getLog()->author_username;
        
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        $imgName = str_replace(' ','', strtolower($title));
        $imageName = $imgName.'.'.$ext;
        
        $data = array(
            'comic_judul' => $title,
            'comic_desc' => $desc,
            'comic_status' => 1,
            'comic_genre' => $genre,
            'comic_cover' => $imageName,
            'comic_tgl' => date('Y-m-d'),
            'author_id' => $author_id
        );

        //print_r();
        $this->mdl_series->input_data($data,'comic');

        //make dir
        $d = $this->mdl_series->getLastComic($author_id)->row();
        $path = './assets/img/creator/'.$username.'/comic/'.$d->comic_id;
        mkdir( $path, 0777, true );

        $config['upload_path']='./assets/img/creator/'.$username.'/comic/'; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['file_name'] = $imageName;
         
        $this->load->library('upload',$config); //call library upload 

        $this->upload->do_upload("file");//upload file
         
    }

    function updateComic(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $desc = $this->input->post('description');
        $genre = $this->input->post('genres');
        $username = $this->getLog()->author_username;
        if(!empty($_FILES['file']['name'])){
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            $imgName = str_replace(' ','', strtolower($title));
            $imageName = $imgName.'.'.$ext;
        
            $data = array(
                'comic_judul' => $title,
                'comic_desc' => $desc,
                'comic_genre' => $genre,
                'comic_cover' => $imageName
            );
            $where = array(
                'comic_id' => $id
            );

            //print_r();
            $this->mdl_series->update_data($where,$data,'comic');

            $config['upload_path']='./assets/img/creator/'.$username.'/comic/'; //path folder file upload
            $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
            $config['file_name'] = $imageName;
            $config['overwrite'] = TRUE;

             
            $this->load->library('upload',$config); //call library upload 

            $this->upload->do_upload("file");
        }else{
            $data = array(
                'comic_judul' => $title,
                'comic_desc' => $desc,
                'comic_genre' => $genre,
            );
            $where = array(
                'comic_id' => $id
            );

            $this->mdl_series->update_data($where,$data,'comic');
        }

    }



    function deletecomic($id){
        $row = $this->mdl_series->get_author($id)->row();

        $where = array(
            'comic_id' => $id
        );
        $this->mdl_series->hapus_data($where,'comic');

        //=================================================
        $path = './assets/img/creator/'.$row->author_username.'/comic/'.$row->comic_id;
        $path2 = './assets/img/creator/'.$row->author_username.'/comic/'.$row->comic_cover;
        $this->load->helper("file"); // load the helper
        delete_files($path, true);
        unlink($path2);
        rmdir($path);

        //=================================================

        redirect('fndashboard','refresh');
    }

    

    function addComicEpisode($id){
        $data['comic'] = $this->mdl_series->getComic($id)->row();
        $data['ep'] = $this->mdl_series->getComicDetail($id)->num_rows()+1;
        $this->load->view('frontend/header');
        $this->load->view('frontend/createEpisodeComic',$data);
        $this->load->view('frontend/footer'); 
    }

    private function set_upload_options($id,$ep)
    {   
        $username = $this->getLog()->author_username;
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/img/creator/'.$username.'/comic/'.$id.'/'.$ep.'/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }

    function simpanComicEpisode(){

        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        $comic_id = $this->input->post('id');
        $author_id = $this->getLog()->author_id;
        $username = $this->getLog()->author_username;
        $ep = $this->mdl_series->getComicDetail($comic_id)->num_rows()+1;
        $path = './assets/img/creator/'.$username.'/comic/'.$comic_id.'/'.$ep;
        mkdir($path,0777,true);
        //upload multi
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        $nm ='';
        for($i=0; $i<$cpt; $i++)
        {           
            $ext = pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);
            $_FILES['userfile']['name']= $i.'.'.$ext;
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options($comic_id,$ep));
            $this->upload->do_upload();
            $nm.= $i.'.'.$ext;
            $nm.=',';
        }
        
        
        $data = array(
            'chapter_no' => $ep,
            'chapter_judul' => $title,
            'chapter_content' => $nm,
            'chapter_date' => date('Y-m-d'),
            'comic_id' => $comic_id
        );

        // //print_r();
        $this->mdl_series->input_data($data,'comic_chapter');
        redirect('fndashboard','refresh');    

    }

    function editComicEpisode($id){
        $data['eps'] = $this->mdl_series->getComicSeries($id)->row();
        $data['comic'] = $this->mdl_series->getComic($data['eps']->comic_id)->row();
        $this->load->view('frontend/header');
        $this->load->view('frontend/editEpisodeComic',$data);
        $this->load->view('frontend/footer'); 
    }

}