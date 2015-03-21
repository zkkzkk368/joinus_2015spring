<?php  
	class Join_model extends CI_model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function set_data()
		{
			$data = array(
				'Name' => $this->input->post('uname'),
				'Sex' => $this->input->post('sex'),
				'Grade' => $this->input->post('age'),
				'Major' => $this->input->post('major'),
				'Phone_L' => $this->input->post('longnum'),
				'Phone_S' => $this->input->post('shortnum'),
				'Choice_1' => $this->input->post('firstopt'),
				'Choice_2' => $this->input->post('secondopt'),
				'Obey' => $this->input->post('obey'),
				'FeatureShow' => $this->input->post('featureshow'),
				'Want'=> $this->input->post('understanding')
				);
			return $this->db->insert('PersonalInfo', $data);
		}
	}