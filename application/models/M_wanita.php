<?php

    Class M_wanita extends CI_model{

        public function tampil_data()
        {
            $query = $this->db->limit(4)->get_where('tb_data_barang', array('kategori'=>'pakaian wanita'));
            return $query;
        }

        public function data_accessories()
        {
            $query = $this->db->limit(4)->get_where('tb_data_barang', array('kategori'=>'Accessories Wanita'));
            return $query;
        }

        public function data_shoes()
        {
            $query = $this->db->limit(4)->get_where('tb_data_barang', array('kategori'=>'Shoes Wanita'));
            return $query;
        }


    }

?>