<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_fndashboard extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('novel_tgl','desc');         
			    $query = $this->db->get('novel'); 
		    	return $query;
		}

		function get_novel($id) {
				$this->db->select('*');
				$this->db->from('novel n')->join('author a','a.author_id = n.author_id');
				$this->db->where('n.author_id',$id);
			    $this->db->order_by('novel_judul','asc');
			    $query = $this->db->get(); 
		    	return $query;
		}

		function get_comic($id) {
				$this->db->select('*');
				$this->db->from('comic c')->join('author a','a.author_id = c.author_id');
				$this->db->where('c.author_id',$id);
			    $this->db->order_by('comic_judul','asc');
			    $query = $this->db->get(); 
		    	return $query;
		}

	}
?>