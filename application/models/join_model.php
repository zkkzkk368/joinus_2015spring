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
				'Grade' => $this->input->post('grade'),
				'Major' => $this->input->post('major'),
				'Phone_L' => $this->input->post('longnum'),
				'Phone_S' => $this->input->post('shortnum'),
				'Choice_1' => $this->input->post('firstopt'),
				'Choice_2' => $this->input->post('secondopt'),
				'Obey' => $this->input->post('obey'),
				'FeatureShow' => $this->input->post('featureshow'),
				'Want'=> $this->input->post('understanding')
				);
			$this->db->insert('PersonalInfo', $data);
			$this->load->view('form');
		}

		public function is_dup()
		{
			$name=$this->input->post('uname');
			$query = $this->db->get_where('PersonalInfo', array('Name'=>$name));
			$row = $query->row_array();
			if($row)
			{
				$phonenum1 = $row['Phone_L'];
				$phonenum2=$this->input->post('longnum');
				if($phonenum1 == $phonenum2)
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;
		}
	}