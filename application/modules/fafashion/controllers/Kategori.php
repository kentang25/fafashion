<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends FrontendController {
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
	public function shoes_wanita()
    {
        $base_url = site_url('fafashion/kategori/shoes_wanita');
        $per_page = 10;
        $uri_segment = 4;

        $total_rows = $this->M_shop->get_count_shoes_wanita();
        $offset     = $this->uri->segment($uri_segment,0);

        $this->data['shoes_wanita'] = $this->M_shop->get_shoes_wanita_list($per_page,$offset);
        $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);
        $this->template_user('kategori/v_kategori_shoes', $this->data, true);
    }

    public function tshirt_wanita()
    {
        $base_url = site_url('fafashion/kategori/tshirt_wanita');
            $per_page = 10;
            $uri_segment = 4;

            $total_rows = $this->M_shop->get_count_pakaian_wanita();
            $offset     = $this->uri->segment($uri_segment,0);

            $this->data['pakaian_wanita'] = $this->M_shop->get_pakaian_wanita_list($per_page,$offset);
            $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);
        
        $this->template_user('kategori/v_kategori_tshirt', $this->data, true);
    }

    public function aksesoris_wanita()
    {
        $base_url = site_url('fafashion/kategori/aksesoris_wanita')
        $per_page = 10;
        $uri_segment = 4;

        $total_rows = $this->M_shop->get_count_aksesoris();
        $offset     = $this->uri->segment($uri_segment,0);

        $this->data['aksesoris_wanita'] = $this->M_shop->get_aksesoris($per_page,$offset);
        $this->data['pagination']       = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);

        $this->template_user('kategori/v_kategori_aksesoris', $this->data, true);
    }


}
