<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_home extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('novel_tgl','desc');         
			    $query = $this->db->get('novel'); 
		    	return $query;
		}

		function get_data_novel($limit) {
				$this->db->select('*');
				$this->db->from('novel n')->join('author a','a.author_id = n.author_id');
			    $this->db->order_by('novel_tgl','desc');         
			    $this->db->limit($limit);
			    $query = $this->db->get(); 
		    	return $query;
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	

		function get_data_comic($limit) {
				$this->db->select('*');
				$this->db->from('comic c')->join('author a','a.author_id = c.author_id');
			    $this->db->order_by('comic_tgl','desc');         
			    $this->db->limit($limit);
			    $query = $this->db->get(); 
		    	return $query;
		}

		function get_novel() {
				$this->db->select('*');
				$this->db->from('novel n')->join('author a','a.author_id = n.author_id');
			    $this->db->order_by('novel_tgl','desc');         
			    $query = $this->db->get(); 
		    	return $query;
		}

		function get_comic() {
				$this->db->select('*');
				$this->db->from('comic c')->join('author a','a.author_id = c.author_id');
			    $this->db->order_by('comic_tgl','desc');         
			    $query = $this->db->get(); 
		    	return $query;
		}

		function getSortNovel($key){
			$this->db->select('*');
			$this->db->from('novel n')->join('author a','a.author_id = n.author_id');
			$this->db->like('novel_genre',$key);
			$this->db->order_by('novel_tgl','desc');         
		    $query = $this->db->get(); 
	    	return $query;
		}

		function getSortComic($key){
			$this->db->select('*');
			$this->db->from('comic c')->join('author a','a.author_id = c.author_id');
			$this->db->like('comic_genre',$key);
			$this->db->order_by('comic_tgl','desc');         
		    $query = $this->db->get(); 
	    	return $query;
		}

		function getCreator(){
			$this->db->order_by('author_id','asc');         
		    $query = $this->db->get('author'); 
	    	return $query;
		}

		function getCreatorById($id){
			
			$this->db->where('author_id',$id);      
		    $query = $this->db->get('author'); 
	    	return $query;
		}

		function getNovelCreator($id) {
				$this->db->select('*');
				$this->db->from('novel n')->join('author a','a.author_id = n.author_id');
				$this->db->where('a.author_id',$id);
			    $this->db->order_by('novel_tgl','desc');         
			    $query = $this->db->get(); 
		    	return $query;
		}

		function getComicCreator($id) {
				$this->db->select('*');
				$this->db->from('comic c')->join('author a','a.author_id = c.author_id');
				$this->db->where('a.author_id',$id);
			    $this->db->order_by('comic_tgl','desc');         
			    $query = $this->db->get(); 
		    	return $query;
		}

	}
?>