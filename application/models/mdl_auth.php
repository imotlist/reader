<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_auth extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('barang_nama','asc');         
			    $query = $this->db->get('tbl_barang'); 
		    	return $query->result();
		}

		function get_data_exception($id) {

			// Sub Query
			$this->db->select('barang_id')->from('tbl_gudang_detail')->where('gudang_id',$id);
			$subQuery =  $this->db->get_compiled_select();
				 
			// Main Query
			return	$this->db->select('*')
				         ->from('tbl_barang')
				         ->where("barang_id NOT IN ($subQuery)", NULL, FALSE)
				         ->get()
				         ->result();
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



		function log_author($user,$pass){

			$this->db->where('author_username',$user);
			$this->db->where('author_password',md5($pass));
			$row = $this->db->get('author');
			return $row;
		}

	}
?>