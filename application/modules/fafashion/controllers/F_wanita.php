<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_wanita extends FrontendController {
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
        $this->load->model('M_wanita');
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

        
        $this->data['a_wanita'] = $this->M_wanita->data_accessories()->result();
        $this->data['s_wanita'] = $this->M_wanita->data_shoes()->result();

        $this->data['f_wanita'] = $this->M_wanita->tampil_data()->result();
        $this->template_user('v_wanita', $this->data,true);
     }
	
}
