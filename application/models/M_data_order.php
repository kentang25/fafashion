<?php

    Class M_data_order extends CI_model{
        public function tampil_data()
        {
            $query = $this->db->get('tb_order');
            return $query;
        }

        public function get_count()
        {
            $query = $this->db->get('tb_order');
            return $query->num_rows();
        }

        public function get($start,$limit)
        {
            $query = $this->db->get('tb_order',$start,$limit);
            return $query->result();
        }
    }

?>