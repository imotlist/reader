<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_tx_detail extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('tx_detail_id','asc');         
			    $query = $this->db->get('tbl_tx_detail'); 
		    	return $query->result();
		}

		function get_edit($where,$table){
			return $this->db->get_where($table,$where)->result_array();
		}

		function get_detail($id){
			$this->db->select('*');
			$this->db->from('tbl_tx_detail t'); 
			$this->db->join('tbl_barang b','t.barang_id = b.barang_id');
			$this->db->where('tx_id',$id);
			return $query = $this->db->get()->result();		
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}

		function hapus_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	


	    //paging
	    function data($number,$offset){
	 	$this->db->order_by('tx_detail_id','asc');  
		return $query = $this->db->get('tbl_tx_detail',$number,$offset)->result();		
		}
	 
		function jml_data(){
			return $this->db->get('tbl_tx_detail')->num_rows();
		}


	}
?>