<?php
/**
* 
*/
class Categories_model extends CI_Model {
	
	public function get_categories($id = false){
	
		if($id === false){

			$this->db->order_by('name', 'ASC');
			$query = $this->db->get('categories');
			return $query->result_array();

		} else {

			$this->db->where('categories.id', $id);
			$query = $this->db->get('categories');
			return $query->row_array();

		}

	}

	public function categories_posts($id){

		$this->db->order_by('posts.id', 'DESC');
		$this->db->where('categories.id', $id);
		$this->db->join('categories', 'posts.category_id = categories.id');
		$query = $this->db->get('posts');
		return $query->result_array();

	}

	public function create(){

		$data = array(
			'name' => $this->input->post('name')
			);

		$this->db->insert('categories', $data);

	}

}