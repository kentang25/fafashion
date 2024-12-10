<?php

    Class M_data_cart extends CI_model{

        public function tampil_data_cart(){
            $query = $this->db->get('tb_cart');
            return $query;
        }

    }

?>