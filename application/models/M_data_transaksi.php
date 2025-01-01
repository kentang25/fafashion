<?php

    Class M_data_transaksi extends CI_model{
        public function tampil_data()
        {
            $query = $this->db->get('tb_transaksi');
            return $query;
        }
    }

?>