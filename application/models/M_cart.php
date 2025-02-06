<?php

    Class M_cart extends CI_model{

       public function find($id_barang)
        {
            $result = $this->db->where('id_barang', $id_barang)
                            ->limit(1)
                            ->get('tb_data_barang');
            return $result->num_rows() > 0 ? $result->row() : null;
        }


        public function insert_cart($data)
        {
            $query = $this->db->insert('tb_cart',$data);
            return $query;
        }

        public function show_cart($id_user)
        {
            $query = $this->db->where('id_user',$id_user)
                              ->get('tb_cart');
            return $query;

        }

        public function get_cart()
        {
            $query = $this->db->get('tb_cart');
            return $query;
        }

        public function get_barang_by_id($id_barang)
        {
            return $this->db->get_where('tb_data_barang', array('id_barang'=>$id_barang))->row();
        }

        public function update_cart_qty($id_barang,$jumlah)
        {
            $this->db->where('id_barang', $id_barang);
            return $this->db->update('tb_cart', [
                'jumlah' => $jumlah
                
            ]);
        }


    }

?>