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
        $this->load->library('pagination');

        $jumlah = $this->M_shop->get_count();
        // var_dump($jumlah);
        // exit();
        $config['base_url']     = site_url(). 'fafashion/f_shop/index';
        // $config['base_url']     = base_url('shop');
        // var_dump($config['base_url']);
        // exit();
        $config['total_rows']     = $jumlah;
        $config['per_page']     = 10;
        $choice                 = $config['total_rows']/$config['per_page'];
        $config['num_links']    = floor($choice);
        // var_dump($choice);
        // exit();

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';

        $this->pagination->initialize($config);
        // var_dump($this->pagination->initialize($config));
        // exit();

        $data['start'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // var_dump($data['start']);
        // exit();

        $this->data['barang_shop'] = $this->M_shop->get($config['per_page'],$data['start']);
      //   var_dump($this->data['barang_shop']);
      //   exit();

        $this->template_user('v_shop', $this->data,true);
     }

     

     public function tshirt()
     {
        $this->data['tshirt_wanita'] = $this->M_shop->tshirt();
        $this->template_user('kategori/v_kategori_tshirt',$this->data,true);
     }
	
}
