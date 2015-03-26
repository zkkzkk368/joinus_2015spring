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
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_message('required', '“%s” 尚未填写');
			$this->form_validation->set_message('numeric', "“%s” 填写不合规范");

			$this->form_validation->set_rules('uname', '姓名', 'required|trim|xss_clean');     //|两边不能有空格，trim去除两端空格，xss_clean去掉有害数据？
			$this->form_validation->set_rules('major', '专业', 'required');
			$this->form_validation->set_rules('longnum', '手机长号', 'required|trim|numeric');
			$this->form_validation->set_rules('featureshow', '个人展示', 'required');
			$this->form_validation->set_rules('understanding', '希望从俱乐部获得什么', 'required');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form');
			}
			else
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
				// $this->load->view('form', $data);
				// $this->load->view('apply');
			} 
		}

		// public function apply()
		// {
		// 	if( $this->join_model->is_dup())
		// 	{
		// 		$data['success'] = FALSE;
		// 		$this->load->view('apply', $data);
		// 	}
		// 	else
		// 	{
		// 		$this->join_model->set_data();
		// 		$data['success'] = TRUE;
		// 		$this->load->view('apply', $data);
		// 	}
		// }
	}