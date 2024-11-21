<?php

    Class M_cart extends CI_model{

        public function find($id_barang)
        {
            $result = $this->db->where('id_barang',$id_barang)
                               ->limit(1)
                               ->get('tb_data_barang');

            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }

        public function insert_cart($data)
        {
            $query = $this->db->insert('tb_cart',$data);
            return $query;
        }


    }

?>