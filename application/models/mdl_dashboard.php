<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_dashboard extends CI_Model {

		public function get_data($table) {         
			    $query = $this->db->get($table); 
		    	return $query;
		}

		function get_fav($limit){
			$this->db->select('barang_nama,barang_stok, SUM(tx_detail_qty) AS "Qty", SUM(tx_detail_sub) AS "Total"');
			$this->db->from('tbl_tx_detail t');
			$this->db->join('tbl_barang b','t.barang_id = b.barang_id');
			$this->db->join('tbl_tx x','t.tx_id = x.tx_id');
			$this->db->where('MONTH(x.tx_tgl)' , date('m'));
			$this->db->group_by('t.barang_id'); 
 			$this->db->order_by('Qty', 'desc');
 			$this->db->limit($limit);
 			return $query = $this->db->get()->result();	

		}

		function get_menipis($table,$jml) {         
		    $this->db->where('barang_stok <=',$jml);
		    $query = $this->db->get($table); 
	    	return $query;
		}

		function total_jual($bulan){
			$this->db->select('SUM(tx_total) as "Total"');
			$this->db->where('MONTH(tx_tgl)' , $bulan);
		    $query = $this->db->get('tbl_tx'); 
	    	$data = $query->row();
	    	return $data->Total;
		}

		function get_masuk($bulan,$tahun,$limit){
			$this->db->select('barang_nama, SUM(inv_qty) AS "Qty"');
			$this->db->from('tbl_inventory i');
			$this->db->join('tbl_barang b','i.barang_id = b.barang_id');
			$this->db->where('i.jenis_id',2);
			if($bulan != NULL){
				$this->db->where('MONTH(inv_tgl)' , $bulan);
			}
			if($tahun != NULL){
				$this->db->where('YEAR(inv_tgl)' , $tahun);
			}
			$this->db->group_by('i.barang_id'); 
 			$this->db->order_by('Qty', 'desc');
 			$this->db->limit($limit);
 			return $query = $this->db->get()->result();	
		}

		function get_keluar($bulan,$tahun,$limit){
			$this->db->select('barang_nama, SUM(inv_qty) AS "Qty"');
			$this->db->from('tbl_inventory i');
			$this->db->join('tbl_barang b','i.barang_id = b.barang_id');
			$this->db->where('i.jenis_id !=',2);
			if($bulan != NULL){
				$this->db->where('MONTH(inv_tgl)' , $bulan);
			}
			if($tahun != NULL){
				$this->db->where('YEAR(inv_tgl)' , $tahun);
			}
			$this->db->group_by('i.barang_id'); 
 			$this->db->order_by('Qty', 'desc');
 			$this->db->limit($limit);
 			return $query = $this->db->get()->result();	
		}

		function get_jual($bulan,$tahun,$limit){
			$this->db->select('barang_nama, SUM(tx_detail_qty) AS "Qty", SUM(tx_detail_sub) AS "Total"');
			$this->db->from('tbl_tx_detail t');
			$this->db->join('tbl_barang b','t.barang_id = b.barang_id');
			$this->db->join('tbl_tx x','t.tx_id = x.tx_id');
			if($bulan != NULL){
				$this->db->where('MONTH(x.tx_tgl)' , $bulan);
			}
			if($tahun != NULL){
				$this->db->where('YEAR(inv_tgl)' , $tahun);
			}
			$this->db->group_by('t.barang_id'); 
 			$this->db->order_by('Qty', 'desc');
 			$this->db->limit($limit);
 			return $query = $this->db->get()->result();	
		}

	    //paging
	    function data($number,$offset){
	 	$this->db->order_by('barang_nama','asc');  
		return $query = $this->db->get('tbl_barang',$number,$offset)->result();		
		}

		function get_alltahun(){
			$this->db->select('DISTINCT(YEAR(inv_tgl)) AS Th');
			return $query = $this->db->get('tbl_inventory')->result();

		}

	}
?>