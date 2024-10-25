<?php
	
	Class M_Cerita extends CI_Model{

		public function insert_data()
		{

			$data = array(

				'nama' 	 	=> $this->input->post('nama'),
				'tema' 	 	=> $this->input->post('tema'),
				'email'  	=> $this->input->post('email'),
				'kategori'	=> $this->input->post('get_kategori'),
				'cerita' 	=> $this->input->post('cerita')

			);

			$query = $this->db->insert('tb_cerita',$data);
			return $query;
		}

		public function get_kategori()
		{
			$query = $this->db->get('tb_kategori');
			return $query;
		}

	}

?>