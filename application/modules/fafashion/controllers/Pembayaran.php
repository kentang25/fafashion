<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends FrontendController {
	//
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layouts, ....
     */ 
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        //
        parent::__construct();
        // This function returns the main CodeIgniter object.
        // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
        $CI =& get_instance();

        $this->load->model('M_auth_user');
        $this->load->model('M_pembayaran');
        $this->load->model('M_cart');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */

     public function order()
     {

        $get_id = $this->M_auth_user->get_id_user();
        // var_dump($get_id);
        // exit();
        

        $cart_item = $this->M_cart->show_cart($get_id)->result();
        

        // if(empty($cart_item)){
        //     show_error('Keranjan masih kosong');
        // }

        $subtotal = 0;

        // ada kesalahan disubtotal

        foreach($cart_item as $key => $item){
            $subtotal += $item->jumlah * $item->harga;
        }

        $subtotal;

        

        // $total_harga = $this->M_pembayaran->get_total_harga($get_id);
        

        $order_data = array(

            'id_user'       => $get_id,
            'total_harga'   => $subtotal,
            'status'        => 'pending',
            'jumlah'        => 1,
            'created_at'    => date('Y-m-d H:i:s')

        );
        

        $order_id = $this->M_pembayaran->created_order($order_data);
        // var_dump($order_id);
        // exit();
        
        $this->data['order_items'] = $this->M_cart->show_cart($get_id)->result();

        $this->template_user('v_pembayaran',$this->data,true);
        
     }

     public function transaksi($id_order)
     {
        $get_id_order = $this->M_pembayaran->get_id_order($id_order);
        // var_dump($get_id_order);
        // exit();
        $get_order = $this->M_pembayaran->get_order($get_id_order);
        // var_dump($get_order);
        // exit();
        $subtotal = 0;

        foreach($get_order as $key => $items){
            $subtotal += $items->jumlah * $items->total_harga;
        }

        $subtotal;
        // var_dump($subtotal);

        $status_pembayaran = 'succes';

        $data_transaksi = array(

            'id_order'          => $get_id_order->id_order,
            'metode_pembayaran' => 'paypal',
            'status'            => $status_pembayaran,
            'total_harga'       => $subtotal,
            'created_at'        => date('Y-m-d H:i:s')

        );

        


        $transaksi = $this->M_pembayaran->created_transaksi($data_transaksi);
        // var_dump($transaksi);
        // exit();

        
        // $this->M_pembayaran->update_status_order($id_order);

        // --- jika transaksi berhasil ---

        if($transaksi){
            // --- update status ---
            $this->M_pembayaran->update_status_order($id_order);
            
            // --- clear cart ---

            $id_user = $this->M_auth_user->get_id_user();
            $this->M_pembayaran->clear_cart($id_user);

            // redirect('shop');

        }else{
            return FALSE;
        }
     }


	
}
