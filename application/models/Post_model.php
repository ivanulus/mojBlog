<?php 
/**
* 
*/
class Post_model extends CI_Model {
	
	public function get_posts($slug = false){
		
		if($slug === false){
			
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'posts.category_id = categories.id');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$data = array(
			'slug' => $slug
			);
		$query = $this->db->get_where('posts', $data);
		return $query->row_array();
	}

	public function create_post(){

		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category')
		);

		$this->db->insert('posts', $data);

	}

	public function delete_post($id){

		$this->db->where('id', $id);
		$this->db->delete('posts');

	}

	public function update_post(){

		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body')
			);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('posts', $data);

	}
}