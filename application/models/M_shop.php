<?php

    Class M_shop extends CI_model{

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

        public function get($start = null,$limit = null){
            $query = $this->db->get('tb_data_barang',$start,$limit);
            return $query->result();
        }

        // --- kategori ---

        public function get_count_shoes_wanita()
        {
            $query = $this->db->get_where('tb_data_barang', array('kategori'=>'Shoes Wanita'));
            return $query->num_rows();
        }
        
        public function get_shoes_wanita_list($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->where('kategori', 'Shoes Wanita');
            $query = $this->db->get('tb_data_barang');
            return $query->result(); // Mengembalikan data dalam bentuk array objek
        }


        public function get_count_pakaian_wanita()
        {
            $query = $this->db->get_where('tb_data_barang', array('kategori'=>'Pakaian Wanita'));
            return $query->num_rows();
        }
        
        public function get_pakaian_wanita_list($limit= null, $start= null)
        {
            $this->db->limit($limit, $start);
            $this->db->where('kategori', 'Pakaian Wanita');
            $query = $this->db->get('tb_data_barang');
            return $query->result(); // Mengembalikan data dalam bentuk array objek
        }

        public function get_count_aksesoris()
        {
            $query = $this->db->get_where('tb_data_barang', array('kategori'=>'Accessories Wanita'));
            return $query->num_rows();
        }

        public function get_aksesoris($limit = null,$start = null)
        {
            $this->db->limit($limit,$start);
            $this->db->where('kategori', 'Accessories Wanita');
            $query = $this->db->get('tb_data_barang');
            return $query->result();
        }


    }

?>