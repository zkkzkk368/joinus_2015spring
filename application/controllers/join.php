<?php 
	class Join extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct(); 
			$this->load->helper('url');
			$this->load->model('join_model');
		}

		public function index()
		{
			$this->load->view('join01html');
		}

		public function join02()
		{
			$this->load->view('join02');
		}

		public function form()
		{
			$this->load->view('form');
		}

		public function apply()
		{
			if( $this->join_model->is_dup())
			{
				$data['success'] = FALSE;
				$this->load->view('apply', $data);
			}
			else
			{
				$this->join_model->set_data();
				$data['success'] = TRUE;
				$this->load->view('apply', $data);
			}
		}
	}