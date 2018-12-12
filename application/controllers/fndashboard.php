<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fndashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mdl_fndashboard');
		//$this->load->model('Auth_model');
	}

	public function index()
	{
		$log_data = $this->session->userdata('log_data');
		if(empty($log_data)){
			redirect('home','refresh');
		}else{
			//$data['novel'] = $this->mdl_home->get_data_limit(10)->result();
			$this->load->view('frontend/header');
			$this->load->view('frontend/dashboard');
			$this->load->view('frontend/footer');
		}
	}

	function get_list(){
		$log_data = $this->session->userdata('log_data');
		$id=$log_data->author_id;
		$novel = $this->mdl_fndashboard->get_novel($id)->result();
		$html='';
		foreach ($novel as $n) {
			$html.= '<li class="series-card js-content-card">
                    <div class="series-contents-wrap">
                        <div class="thumb-wrap">
                            <a href="#" class="thumb">
                                <img src="'.base_url('assets/img/creator/'.$n->author_username.'/novel/'.$n->novel_cover).'" alt="'.$n->novel_id.'" width="80" height="80">
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <h3 class="title"><a href="'.base_url('series/novel/').$n->novel_id.'">'.$n->novel_judul.'</a></h3>
                            <div class="desc-footer">
                                <div class="state-count">
                                    <a href="/dashboard/series/update/125732">1 Episode</a>
                                    <span class="dot"></span>
                                    <a href="#">0 Subscriber</a>
                                </div>
                            </div>
                            <div class="desc-footer">
                                <span class="date">'.$n->novel_tgl.'</span>
                            </div>
                        </div>
                        <ul class="daily-snapshot-wrap">

                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-views-on"></i> Daily Views</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-likes-on"></i> Daily Likes</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                            0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-subs-on"></i> Daily Subscribers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-wrap">
                        <ul class="buttons">
                            <li>
                                <a href="'.base_url('series/addNovelEpisode/'.$n->novel_id).'" class="img-btn mod-new" data-toggle="tooltip" data-title="Add Episode" data-original-title="" title=""><i class="sp-btn-new"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/editnovel/'.$n->novel_id).'" class="img-btn js-btn" data-ico="sp-ico-edit" data-toggle="tooltip" data-title="Edit Series" data-original-title="" title=""><i class="sp-ico-edit"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/deletenovel/'.$n->novel_id).'" class="hps img-btn js-btn" name="'.$n->novel_id.'" data-kind="series" data-title="Series Stats" data-original-title="" title=""><i class="sp-ico-stats"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>';

		}
        $html.='<script type="text/javascript">
                $(function(){
                    $(".hps").click(function(){
                        return confirm("Hapus Series Beserta Semua Episode ?");
                        console.log("asd");
                    });
                })
                </script>';
		echo $html;
	}

	function get_novel(){
		$log_data = $this->session->userdata('log_data');
		$id=$log_data->author_id;
		$novel = $this->mdl_fndashboard->get_novel($id)->result();
		$html='';
		foreach ($novel as $n) {
			$html.= '<li class="series-card js-content-card">
                    <div class="series-contents-wrap">
                        <div class="thumb-wrap">
                            <a href="#" class="thumb">
                                <img src="'.base_url('assets/img/creator/'.$n->author_username.'/novel/'.$n->novel_cover).'" alt="'.$n->novel_id.'" width="80" height="80">
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <h3 class="title"><a href="'.base_url('series/novel/').$n->novel_id.'">'.$n->novel_judul.'</a></h3>
                            <div class="desc-footer">
                                <div class="state-count">
                                    <a href="/dashboard/series/update/125732">1 Episode</a>
                                    <span class="dot"></span>
                                    <a href="#">0 Subscriber</a>
                                </div>
                            </div>
                            <div class="desc-footer">
                                <span class="date">'.$n->novel_tgl.'</span>
                            </div>
                        </div>
                        <ul class="daily-snapshot-wrap">

                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-views-on"></i> Daily Views</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-likes-on"></i> Daily Likes</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                            0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-subs-on"></i> Daily Subscribers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-wrap">
                        <ul class="buttons">
                            <li>
                                <a href="'.base_url('series/addNovelEpisode/'.$n->novel_id).'" class="img-btn mod-new" data-toggle="tooltip" data-title="Add Episode" data-original-title="" title=""><i class="sp-btn-new"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/editnovel/'.$n->novel_id).'" class="img-btn js-btn" data-ico="sp-ico-edit" data-toggle="tooltip" data-title="Edit Series" data-original-title="" title=""><i class="sp-ico-edit"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/deletenovel/'.$n->novel_id).'" class="hps img-btn js-btn" name="'.$n->novel_id.'" data-kind="series" data-title="Series Stats" data-original-title="" title=""><i class="sp-ico-stats"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>';
		}
        $html.='<script type="text/javascript">
                $(function(){
                    $(".hps").click(function(){
                        return confirm("Hapus Series Beserta Semua Episode ?");
                        console.log("asd");
                    });
                })
                </script>';
		echo $html;
	}

	function get_comic(){
		$log_data = $this->session->userdata('log_data');
		$id=$log_data->author_id;
		$comic = $this->mdl_fndashboard->get_comic($id)->result();
		$html='';
		foreach ($comic as $c) {
			$html.= '<li class="series-card js-content-card">
                    <div class="series-contents-wrap">
                        <div class="thumb-wrap">
                            <a href="#" class="thumb">
                                <img src="'.base_url('assets/img/creator/'.$c->author_username.'/comic/'.$c->comic_cover).'" alt="'.$c->comic_id.'" width="80" height="80">
                            </a>
                        </div>
                        <div class="desc-wrap">
                            <h3 class="title"><a href="'.base_url('series/comic/').$c->comic_id.'">'.$c->comic_judul.'</a></h3>
                            <div class="desc-footer">
                                <div class="state-count">
                                    <a href="/dashboard/series/update/125732">1 Episode</a>
                                    <span class="dot"></span>
                                    <a href="#">0 Subscriber</a>
                                </div>
                            </div>
                            <div class="desc-footer">
                                <span class="date">'.$c->comic_tgl.'</span>
                            </div>
                        </div>
                        <ul class="daily-snapshot-wrap">

                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-views-on"></i> Daily Views</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                        0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-likes-on"></i> Daily Likes</a>
                            </li>
                            <li>
                                <a class="today" href="#">
                                            0
                                        <span class="percent " data-toggle="tooltip" data-title="It was 0 yesterday at this time." data-original-title="" title="">
                                            <i class="sp-delta-negative ico-minus"></i><i class="sp-delta-positive ico-plus"></i>
                                            0%
                                        </span>
                                    </a>
                                <a class="icon" href="#"><i class="sp-tab-subs-on"></i> Daily Subscribers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-wrap">
                        <ul class="buttons">
                            <li>
                                <a href="'.base_url('series/addComicEpisode/'.$c->comic_id).'" class="img-btn mod-new" data-toggle="tooltip" data-title="Add Episode" data-original-title="" title=""><i class="sp-btn-new"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/editcomic/'.$c->comic_id).'" class="img-btn js-btn" data-ico="sp-ico-edit" data-toggle="tooltip" data-title="Edit Series" data-original-title="" title=""><i class="sp-ico-edit"></i></a>
                            </li>
                            <li>
                                <a href="'.base_url('series/deletecomic/'.$c->comic_id).'" class="hps img-btn js-btn" name="'.$c->comic_id.'" data-kind="series" data-title="Series Stats" data-original-title="" title=""><i class="sp-ico-stats"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>';
		}
        $html.='<script type="text/javascript">
                $(function(){
                    $(".hps").click(function(){
                        return confirm("Hapus Series Beserta Semua Episode ?");
                        console.log("asd");
                    });
                })
                </script>';
		echo $html;
	}

}