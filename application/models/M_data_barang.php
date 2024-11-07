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

    }
?>