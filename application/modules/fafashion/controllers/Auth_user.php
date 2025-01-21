<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends FrontendController {
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
	public function register(){

        $this->load->helper('form');

		$this->form_validation->set_rules('username','Username','required|trim|is_unique[tb_auth.username]');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('konfirm_password','Konfirmasi_password','required|trim|matches[password]');

            if($this->form_validation->run() == FALSE){
                $this->template_login('auth/v_register',$this->data,true);
            }else{
                $data = $this->M_auth_user->insert_data_user();
                redirect('login');
            }
	}

    public function login()
    {
        $this->load->helper('form');

        if($this->M_auth_user->is_Loggedin()){
            redirect(base_url('fafashion'));
        }

        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

            if($this->form_validation->run() == FALSE){
                $this->template_login('auth/v_login',$this->data,true);
            }else{
                // $data = $this->M_auth_user->get_user('username', $this->input->post('username'));
                // $pass = $this->M_auth_user->get_user('password',$this->input->post('password'));
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $data = $this->M_auth_user->get_user($username,$password);
                // var_dump($data);
                // exit();

                    if($data == FALSE){
                        $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade-show" role="alert">
                              Username atau Password anda salah!
                              
                            </div>');
                        redirect('login');
                    }else{
                        // --- set session ---

                        $this->session->set_userdata('id_user',$data['id_user']);
                        // $_SESSION['user_id']        = $data['id_user'];
                        // var_dump($_SESSION['user_id']);
                        // exit();
                        $this->session->set_userdata('is_logged_in', TRUE);

                        redirect(base_url('fafashion'));
                    }
            }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
}
