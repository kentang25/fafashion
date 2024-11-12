<?php

    Class M_fafashion extends CI_model{

        public function tampil_data($limit = 8)
        {
            $query = $this->db->limit($limit)->get('tb_data_barang');
            return $query;
        }

        public function hot_trend()
        {
            $query = $this->db->get_where('tb_data_barang', array('news'=>'Hot Trend'));
            return $query;
        }

        public function best_seller()
        {
            $query = $this->db->get_where('tb_data_barang', array('news'=>'Best Seller'));
            return $query;
        }

        public function feature()
        {
            $query = $this->db->get_where('tb_data_barang', array('news'=>'Feature'));
            return $query;
        }
    }

?>