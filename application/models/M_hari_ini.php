<?php
	
	Class M_hari_ini extends CI_Model{

		public function bahan_berita()
		{
			$query = $this->db->get('tbl_berita');
			return $query;
		}

		public function count()
		{
			$query = $this->db->get('tbl_berita');
			return $query->num_rows();
		}

		public function get($limit,$start)
		{
			$query = $this->db->get('tbl_berita',$limit,$start);
			return $query->result_array();
		}

		public function insert_data()
		{
			$info_berita 	= $this->input->post('info_berita');
			$keterangan 	= $this->input->post('keterangan');
			$tempat 		= $this->input->post('tempat');
			$tanggal		= $this->input->post('tanggal_kejadian');
			$gambar 		= $_FILES['gambar']['name'];

			// var_dump($gambar);
			// exit();

			if($gambar = ''){}else{

				$config['upload_path']		= FCPATH. 'assets/upload';
				$config['allowed_types']	= 'png|jpg|jpeg|gif';

					$this->load->library('upload',$config);

					if(!$this->upload->do_upload('gambar')){
						echo "gagal upload gambar" . die();
					}else{
						$gambar = $this->upload->data('file_name');
					}
		
			}

			$data = array(

				'info_berita' 		=> $info_berita,
				'keterangan'		=> $keterangan,
				'tempat'			=> $tempat,
				'tanggal_kejadian'	=> $tanggal,
				'gambar'			=> $gambar

			);

			$query = $this->db->insert('tbl_berita',$data);
			return $query;
		}

		public function edit_data($table,$where)
		{
			$query = $this->db->get_where($table,$where);
			return $query;
		}

		public function update_data($id)
		{
			$info_berita 	= $this->input->post('info_berita');
			$keterangan 	= $this->input->post('keterangan');
			$tempat 		= $this->input->post('tempat');
			$tanggal		= $this->input->post('tanggal_kejadian');

					$data = array(

							'info_berita'		=> $info_berita,
							'keterangan'		=> $keterangan,
							'tempat'			=> $tempat,
							'tanggal_kejadian'	=> $tanggal

					);

					$this->db->where('id',$id);
					$query = $this->db->update('tbl_berita',$data);
					return $query;
		}

		public function delete_data($id)
		{
			$query = $this->db->delete('tbl_berita', array('id',$id));
			return $query;
		}

		public function detail($id)
		{
			$query = $this->db->get_where('tbl_berita',array('id'=>$id))->row();
			return $query;
		}

	}

?>