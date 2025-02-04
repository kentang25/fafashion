<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_order extends BackendController {
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

        $this->load->model('M_data_order');
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
        
        $jumlah = $this->M_data_order->get_count();

        $base_url = base_url('fa_admin/data_order/index');
        $per_page = 10;
        $uri_segment = 4;

        $total_rows = $jumlah;
        $offset     = $this->uri->segment($uri_segment,0);

        $this->data['orders'] = $this->M_data_order->get($per_page,$offset);
        $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);

        $this->template_admin('v_data_order',$this->data,true);

    }
}
