<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_novel extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('novel_id','desc');         
			    $query = $this->db->get('novel'); 
		    	return $query->result();
		}

		function get_edit($where,$table){
			return $this->db->get_where($table,$where);
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
	 	$this->db->order_by('novel_id','asc');  
		return $query = $this->db->get('novel',$number,$offset)->result();		
		}
	 
		function jml_data(){
			return $this->db->get('novel')->num_rows();
		}

		function get_author(){
			$this->db->order_by('author_id','asc');         
		    $query = $this->db->get('author'); 
	    	return $query;
		}
		function getChapter($id){
			$this->db->where('novel_id',$id);
			$this->db->order_by('chapter_id','desc');         
		    $query = $this->db->get('novel_chapter'); 
	    	return $query;
		}

		function getAuthorById($id){
			$this->db->where('author_id',$id);         
		    $query = $this->db->get('author'); 
	    	return $query;
		}

	}
?>