<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cart extends BackendController {
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

        $this->load->model('M_data_cart');
        // $this->load->model('M_news');
        // $this->load->model('M_gallery');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index() {
        
        // $this->data['data_cart'] = $this->M_data_cart->tampil_data_cart()->result();
        // $this->load->library('pagination');
        


            $base_url       = site_url('fa_admin/data_cart/index');
            $per_page       = 10;
            $uri_segment    = 4;

            $total_rows = $this->M_data_cart->get_count();

            $offset = $this->uri->segment($uri_segment,0);

            $this->data['data_cart'] = $this->M_data_cart->get_cart($per_page,$offset);

            $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);
            

            $this->template_admin('v_data_cart',$this->data,true);

	}

    public function search_cart()
    {
        $keyword = $this->input->get('keyword');

        $base_url       = site_url('fa_admin/data_cart/search_cart');
        $per_page       = 10;
        $uri_segment    = 4;

        $total_rows = $this->M_data_cart->get_count($keyword);
        $offset     = $this->uri->segment($uri_segment,0);

        $searching = $this->data['data_cart'] = $this->M_data_cart->search_data($keyword,$per_page,$offset);
        // var_dump($searching);
        // exit();
        $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);

        foreach($searching as $key => $src){
            echo '<tr>
                <td>' . ($key + 1)  .'</td>
                <td>' . $src->nama  .'</td>
                <td>' . $src->harga  .'</td>
                <td>' . $src->jumlah  .'</td>
                <td>' . $src->id_barang  .'</td>
                <td>' . $src->id_user  .'</td>
            </tr>';
        }
    }

}
