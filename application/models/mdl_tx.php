<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_tx extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('tx_id','asc');         
			    $query = $this->db->get('tbl_tx'); 
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
			$this->db->delete($table);
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	


	    //paging
	    function data($number,$offset){
	 	$this->db->order_by('tx_id','asc');  
		return $query = $this->db->get('tbl_tx',$number,$offset)->result();		
		}
	 
		function jml_data(){
			return $this->db->get('tbl_tx')->num_rows();
		}

		function get_last() {
				
			    $this->db->order_by('tx_id','desc');         
			    $this->db->limit(1);         
			    $query = $this->db->get('tbl_tx'); 
		    	return $query->row();
		}


	}
?>