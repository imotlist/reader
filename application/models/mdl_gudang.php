<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_gudang extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('gudang_nama','asc');         
			    $query = $this->db->get('tbl_gudang'); 
		    	return $query->result();
		}

		function get_edit($where,$table){
			return $this->db->get_where($table,$where)->result_array();
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}

		function hapus_data($where,$table){
			$this->db->where($where);
			if(!$this->db->delete($table)){
				return false;
				
			}else{
				return true;
			}
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	


	    //paging
	    function data($number,$offset){
	 	$this->db->order_by('gudang_nama','asc');  
		return $query = $this->db->get('tbl_gudang',$number,$offset)->result();		
		}
	 
		function jml_data(){
			return $this->db->get('tbl_gudang')->num_rows();
		}



		function get_detail($id){
			$this->db->select('*');
			$this->db->from('tbl_gudang_detail gd')
				 ->join('tbl_barang b','gd.barang_id = b.barang_id');
			$this->db->where('gudang_id',$id);
			return $this->db->get()->result();
		}


		// function get_stok($id){

		// 	$stok= 0 ;

		// 	if ($id != 0) {
		// 		$this->db->where('barang_id',$id);
		// 		$u = $this->db->get('tbl_barang')->row();

		// 		$stok = $u->barang_stok;
		// 	}

		// 	return $stok;
		// }

		function get_row($id){

			$this->db->where('gudang_detail_id',$id);
			$row = $this->db->get('tbl_gudang_detail')->row();
			return $row;
		}


		function get_data_barang($idgudang){
			$this->db->select('*')->from('tbl_barang b')->join('tbl_gudang_detail gd','b.barang_id = gd.barang_id');
			$this->db->where('gd.gudang_id',$idgudang);
			$this->db->group_by('b.barang_id');
			return $this->db->get()->result();

		}

		function get_row_barang($idbarang,$idgudang){

			$this->db->where('gudang_id',$idgudang);
			$this->db->where('barang_id',$idbarang);
			$row = $this->db->get('tbl_gudang_detail')->row();
			return $row;
		}

		function get_gudang_ex($id){
			$this->db->where('gudang_id !=',$id);
			$this->db->order_by('gudang_nama','asc');
			return $this->db->get('tbl_gudang')->result();
		}


	}
?>