<?php

    Class M_data_cart extends CI_model{

        public function tampil_data_cart(){
            $query = $this->db->get('tb_cart');
            return $query;
        }

        public function get_count()
        {
            $query = $this->db->get('tb_cart');
            return $query->num_rows();
        }

        public function get_cart($start = null, $limit = null)
        {
            $query = $this->db->get('tb_cart',$start,$limit);
            return $query->result();
        }

    }

?>