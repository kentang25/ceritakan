<?php
	
	Class M_ceritakan extends CI_Model{

		public function tampil_data()
		{
			$query = $this->db->limit(3)->get('tb_cerita');
			return $query;
		}

		public function insert_kontak()
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pesan = $this->input->post('pesan');

				$data = array(
					'nama' 	=> $nama,
					'email'	=> $email,
					'pesan'	=> $pesan
				);

				$query = $this->db->insert('tb_kontak_kami',$data);
				return $query;
		}


	}

?>