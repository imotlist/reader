<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mdl_series extends CI_Model {

		public function get_data() {
				
			    $this->db->order_by('barang_nama','asc');         
			    $query = $this->db->get('tbl_barang'); 
		    	return $query->result();
		}

		function get_author($id){
			$this->db->select('*')->from('comic c')->join('author a','c.author_id = a.author_id');
			$this->db->where('c.comic_id',$id);	       
		    $query = $this->db->get(); 
	    	return $query;
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

		function getNovel($id){
			$this->db->select('*')->from('novel n')->join('author a','n.author_id = a.author_id');
			$this->db->where('n.novel_id',$id);	       
		    $query = $this->db->get(); 
	    	return $query;
		}

		function getNovelDetail($id){
			$this->db->where('novel_id',$id);	      
			$this->db->order_by('chapter_no','desc'); 
		    $query = $this->db->get('novel_chapter'); 
	    	return $query;
		}

		function getComic($id){
			$this->db->select('*')->from('comic c')->join('author a','c.author_id = a.author_id');
			$this->db->where('c.comic_id',$id);	       
		    $query = $this->db->get(); 
	    	return $query;
		}

		function getComicDetail($id){
			$this->db->where('comic_id',$id);	      
			$this->db->order_by('chapter_no','desc'); 
		    $query = $this->db->get('comic_chapter'); 
	    	return $query;
		}
		

		function getNovelSeries($id){
			$this->db->where('chapter_id',$id);	      
		    $query = $this->db->get('novel_chapter'); 
	    	return $query;
		}

		function getComicSeries($id){
			$this->db->where('chapter_id',$id);	      
		    $query = $this->db->get('comic_chapter'); 
	    	return $query;
		}

		function getLastComic($id){

			$this->db->where('author_id',$id);
			$this->db->limit(1);	       
			$this->db->order_by('comic_id','desc');	       
		    $query = $this->db->get('comic'); 
	    	return $query;
		}


	}
?>