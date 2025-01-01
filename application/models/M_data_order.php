<?php

    Class M_data_order extends CI_model{
        public function tampil_data()
        {
            $query = $this->db->get('tb_order');
            return $query;
        }
    }

?>