<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends FrontendController {
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

        
        $this->load->model('M_cart');
        $this->load->model('M_auth_user');
        // $this->load->model('M_gallery');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */

    //  public function index()
    //  {
    //     $this->template_user('cart/v_modal_cart',$this->data,true);
    //  }

     public function addCart($id_barang)
     {

        $barang = $this->M_cart->find($id_barang);
        if($this->input->post('qty')){
            $qty = $this->input->post('qty');
        }

        // var_dump($barang);
        // exit();

        $data = array(

            'id'    => $barang->id_barang,
            'name'  => $barang->nama_barang,
            'price' => $barang->harga,
            'qty'   => $qty

        );

        

        $this->cart->insert($data);

        $get_user = $this->M_auth_user->get_id_user();

        $data_cart = array(

            'id_barang' => $data['id'],
            'id_user'   => $get_user,
            'nama'      => $data['name'],
            'harga'     => $data['price'],
            'jumlah'    => $data['qty']

        );

        if($this->M_cart->insert_cart($data_cart)){
            redirect('shop');
        }
     }

     public function cart_shop()
     { 
        $id_user = $this->M_auth_user->get_id_user();

        $this->data['cart_item'] = $this->M_cart->show_cart($id_user)->result();
        $this->template_user('cart/v_cart_shop',$this->data,true);
     }

     public function update_qty() {
        $id_barang = $this->input->post('id_barang');
        // echo json_encode($id_barang);
        // exit();
        $jumlah = $this->input->post('jumlah');
    
        if ($id_barang && $jumlah) {
            // Contoh logika untuk memperbarui kuantitas di database
            // $this->load->model('Cart_model');
            $result = $this->M_cart->update_cart_qty($id_barang, $jumlah);
    
            if ($result) {
                $response = [
                    'status' => 'success',
                    'message' => 'Quantity updated successfully'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to update quantity'
                ];
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Invalid data received'
            ];
        }
    
        echo json_encode($response);
    }
    
    
    
    

     
	
}
