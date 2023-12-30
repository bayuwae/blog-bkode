<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}


	public function contact()
	{
		$data['meta'] = [
			'title' => 'Contact',
		];

		$this->load->library('form_validation');

		if ($this->input->method() === 'post') {

			
			$this->load->model('feedback_model');

			$id = uniqid('', true);


			$feedback = [
				'id' => $id, // genearate id unik
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'massage' => $this->input->post('message')
			  ];

			  $feedback_saved = $this->feedback_model->insert($feedback);
			
	}
		$this->load->view('contact');
	}


	public function java()
	{
		$this->load->view('java');
	}
}
