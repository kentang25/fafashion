<?php
    Class M_data_barang extends CI_model{

        public function tampil_data()
        {
            $query = $this->db->get('tb_data_barang');
            return $query;
        }

        public function get_count()
        {
            $query = $this->db->get('tb_data_barang');
            return $query->num_rows();
        }

        public function get($start = null, $limit = null)
        {
            $query = $this->db->get('tb_data_barang', $start,$limit);
            return $query->result();
        }

        // --- insert data ---

        
        public function insert_data()
		{
			$nama_brg 	= $this->input->post('nama_barang');
			$keterangan = $this->input->post('keterangan');
			$kategori 	= $this->input->post('kategori');
			$news 		= $this->input->post('news');
			$stok 		= $this->input->post('stok');
			$harga 		= $this->input->post('harga');
			$gambar 	= $_FILES['gambar']['name'];

				if($gambar=''){}else{
					$config['upload_path'] 		= FCPATH. 'assets/uploads';
					$config['allowed_types']	= 'png|jpg|gif';

						$this->load->library('upload', $config);

						if(!$this->upload->do_upload('gambar')){
							echo "gambar gagal di upload". die();
						}else{
							$gambar = $this->upload->data('file_name');
						}
				}

				$data = array(

					'nama_barang' 	=> $nama_brg,
					'keterangan'	=> $keterangan,
					'kategori'		=> $kategori,
					'stok'			=> $stok,
					'harga'			=> $harga,
					'gambar'		=> $gambar,
					'news'			=> $news
				);

            $query = $this->db->insert('tb_data_barang',$data);
            return $query;

        }

		// --- edit data---
		public function edit_data($table,$where)
		{
			$query = $this->db->get_where($table,$where);
			return $query;
		}

		// --- update data ---

		public function update_data($id)
		{
			$nama_brg 	= $this->input->post('nama_brg');
			$keterangan = $this->input->post('keterangan');
			$kategori 	= $this->input->post('kategori');
			$harga 		= $this->input->post('harga');
			$stok 		= $this->input->post('stok');
			$news		= $this->input->post('news');

				$data = array(
					'nama_barang' 	=> $nama_brg,
					'keterangan'	=> $keterangan,
					'kategori'		=> $kategori,
					'harga'			=> $harga,
					'stok'			=> $stok,
					'news'			=> $news
				);

				$this->db->where('id_barang', $id);
				$query = $this->db->update('tb_data_barang',$data);
				return $query;
		}

		// --- delete data ---
		public function delete_data($id)
		{
			$query = $this->db->delete('tb_data_barang', array('id_barang' => $id));
			return $query;
		}

		// --- detail data ---
		public function detail_data($id)
		{
			$query = $this->db->get_where('tb_data_barang', array('id_barang'=>$id))->row();
			return $query;
		}

    }
?>