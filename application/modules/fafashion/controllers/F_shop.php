<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_shop extends FrontendController {
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
    
        $this->load->model('M_shop');
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

     public function index()
     {

        
        // $this->data['a_pria'] = $this->M_pria->data_accessories()->result();
        // $this->data['s_pria'] = $this->M_pria->data_shoes()->result();

      //   $this->data['f_shop'] = $this->M_shop->tampil_data()->result();
       $base_url = site_url('fafashion/f_shop/index');
       $per_page = 10;
       $uri_segment = 4;

       $total_rows  = $this->M_shop->get_count();
       $offset      = $this->uri->segment($uri_segment,0);

       $this->data['barang_shop'] = $this->M_shop->get($per_page,$offset);
       $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);

        $this->template_user('v_shop', $this->data,true);
     }

     public function search()
     {
        $keyword = $this->input->get('search');

        $base_url = site_url('fafashion/f_shop/search');
        $per_page = 10;
        $uri_segment = 4;

        $total_rows = $this->M_shop->get_count($keyword);
        $offset     = $this->uri->segment($uri_segment,0);

        $this->data['barang_shop']  = $this->M_shop->get_keyword($keyword,$per_page,$offset);
        $this->data['pagination']   = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);

        if(empty($this->data['barang_shop'])){
          $this->template_user('error/v_404',$this->data,true);
        }else{
          $this->template_user('v_shop',$this->data,true);
        }
     }
	
}
