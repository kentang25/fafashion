<?php

    CLass M_pembayaran extends CI_model{

        public function get_total_harga($id_user)
        {
            $get_cart = $this->db->where('id_user',$id_user)
                                 ->get('tb_cart');
            return $get_cart->result();

            $subtotal = 0;

                foreach($get_cart as $key => $item_cart){
                    $subtotal += $item_cart->qty * $item_cart->harga;
                }

                return $subtotal->rows();
            
        }

        // --- order ---

        public function created_order($data)
        {
            $this->db->insert('tb_order',$data);
            return $this->db->insert_id();
        }

        public function get_id_order($id_order)
        {
            return $this->db->get_where('tb_order',array('id_order => $id_order'))->row();
        }

        public function get_order()
        {
            $query = $this->db->get('tb_order');
            return $query->result();
        }

        public function update_status_order($id_order)
        {
            $this->db->where('id_order',$id_order);
            $this->db->update('tb_order',array('status' => 'complated'));
        }

        // --- end order ---

        // --- transaksi ---

        public function created_transaksi($data)
        {
            $query = $this->db->insert('tb_transaksi',$data);
            return $query;
        }

        // --- clear cart into id_user ---

        public function clear_cart($id_user)
        {
            $this->db->where('id_user',$id_user);
            return $this->db->delete('tb_cart');
        }


    }

?>