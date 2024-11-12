<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fafashion extends FrontendController {
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
        $this->load->model('M_fafashion');
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
        $this->data['hot_trend'] = $this->M_fafashion->hot_trend()->result();
        $this->data['best_seller'] = $this->M_fafashion->best_seller()->result();
        $this->data['feature'] = $this->M_fafashion->feature()->result();

        $this->data['fafashion'] = $this->M_fafashion->tampil_data()->result();
        $this->template_user('v_fafashion', $this->data,true);
     }

     public function news()
     {
        $this->data['hot_trend'] = $this->M_fafashion->hot_trend()->result();
        $this->data['best_seller'] = $this->M_fafashion->hot_trend()->result();
        $this->data['feature'] = $this->M_fafashion->hot_trend()->result();

            $this->template_user('v_fafashion',$this->data,true);


     }
	
}
