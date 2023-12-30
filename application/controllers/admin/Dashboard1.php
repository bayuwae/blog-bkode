<?php

class Dashboard1 extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index(){
		$this->load->model('article_model');
		$this->load->model('feedback_model');
		
		$data = [
			"current_user" => $this->auth_model->current_user(),
			"article_count" => $this->article_model->count(),
			"feedback_count" => $this->feedback_model->count()
		];

		$this->load->view('admin/dashboard1.php', $data);
	}


	public function tiga(){
		$this->load->view('admin/icon-tabler.php');
	}

	public function empat(){
		$this->load->view('admin/sample-page.php');
	}


	public function enam(){
		$this->load->view('admin/ui-buttons.php');
	}

	public function tujuh(){
		$this->load->view('admin/ui-card.php');
	}

	public function delapan(){
		$this->load->view('admin/ui-forms.php');
	}

	public function sembilan(){
		$this->load->view('admin/ui-typography.php');
	}
}