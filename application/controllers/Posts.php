<?php

/**
* 
*/
class Posts extends CI_Controller {
	
	public function index(){
		
		$data['posts'] = $this->post_model->get_posts();
		$data['title'] = 'Latest Posts';

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');

	}

	public function view($slug){

		$data['posts'] = $this->post_model->get_posts($slug);

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');

	}

	public function create(){

		$data['title'] = 'Create Post';
		$data['categories'] = $this->categories_model->get_categories();


		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Text', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');


		if ($this->form_validation->run() === false) {
			
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data); 
			$this->load->view('templates/footer');

		} else {

			$this->post_model->create_post();
			redirect('posts');

		}
	}

	public function delete($id){

		$this->post_model->delete_post($id);
		redirect('posts');

	}

	public function edit($slug){

		$data['title'] = 'Edit post';
		$data['posts'] = $this->post_model->get_posts($slug);

		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');

	}

	public function update(){

		$this->post_model->update_post();
		redirect('posts');

	}
}