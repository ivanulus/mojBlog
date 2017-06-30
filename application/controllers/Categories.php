<?php

/**
* 
*/
class Categories extends CI_Controller {
	
	public function index(){

		$data['title'] = 'Categories';

		$data['categories'] = $this->categories_model->get_categories();
		
		$this->load->view('templates/header');
		$this->load->view('categories/index', $data);
		$this->load->view('templates/footer');

	}

	public function posts($id){

		$data['title'] = $this->categories_model->get_categories($id);
		$data['posts'] = $this->categories_model->categories_posts($id);

		$this->load->view('templates/header');
		$this->load->view('categories/posts', $data);
		$this->load->view('templates/footer');

	}

	public function create(){

		$this->form_validation->set_rules('name', 'Naame', 'required');

		if($this->form_validation->run() === false){
			
			$data['title'] = 'Create category';

			$this->load->view('templates/header');
			$this->load->view('categories/create', $data);
			$this->load->view('templates/footer');

		} else {

		$this->categories_model->create();
		redirect('categories');

		}
	}
}