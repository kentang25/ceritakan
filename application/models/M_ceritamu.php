<?php
	
	Class M_ceritamu extends CI_Model{

		public function tampil_data()
		{
			$query = $this->db->get('tb_cerita');
			return $query;
		}

		public function tampil_kategori()
		{
			$query = $this->db->get('tb_kategori');
			return $query;
		}

		public function detail_cerita($id_cerita)
		{
			$query = $this->db->where('id_cerita',$id_cerita)->get('tb_cerita');
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return  FALSE;
			}
		}

		public function kategori($id_kategori)
		{
			$this->db->order_by('id_cerita','DESC');
			$query = $this->db->where('id_kategori',$id_kategori)->get('tb_cerita');
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return FALSE;
			}
		}


	}

?>