<?php

    Class M_shop extends CI_model{

        public function tampil_data()
        {
            $query = $this->db->get('tb_data_barang');
            return $query;
        }


    }

?>