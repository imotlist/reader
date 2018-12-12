<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		//$this->load->model('Auth_model');
		$this->load->model('mdl_dashboard');
		$this->auth->restrict();
		$this->load->library('session');
	}

	public function index()
	{
		
		$this->load->view('backend/header');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/footer');
	}

	function print_masuk($bulan,$tahun){
		$data['listbulan'] = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');
		$th = $this->mdl_dashboard->get_alltahun();
		$data['allth'] = $th;
		if($tahun == '0'){$tahun = NULL;};
		if($bulan == '0'){$bulan = NULL;};
		
		if($bulan !=NULL){
			$data['data'] = $this->mdl_dashboard->get_masuk($bulan,$tahun,NULL);
		}elseif($tahun != NULL){
			for($i = 1; $i<=12;$i++){
				if(strlen($i) == 1){
					$data['data'.$i] = $this->mdl_dashboard->get_masuk('0'.$i,$tahun,NULL);
				}else{
					$data['data'.$i] = $this->mdl_dashboard->get_masuk($i,$tahun,NULL);
				}
			}
		}else{
			foreach ($th as $t) {
				for($i = 1; $i<=12;$i++){
					if(strlen($i) == 1){
						$data['data'.$i][$t->Th] = $this->mdl_dashboard->get_masuk('0'.$i,$t->Th,NULL);
					}else{
						$data['data'.$i][$t->Th] = $this->mdl_dashboard->get_masuk($i,$t->Th,NULL);
					}
				}
			}
		}
		

		$data['bulan'] = $bulan;		
		$data['tahun'] = $tahun;		
		$this->load->view('backend/laporan/print_masuk',$data);
	}

}
