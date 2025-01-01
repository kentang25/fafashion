<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends BackendController {
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

        $this->load->model('M_data_barang');
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

     public function index()
     {
        // $this->data['data_barang'] = $this->M_data_barang->tampil_data()->result();

        $base_url = site_url('fa_admin/data_barang/index');
        $per_page = 10;
        $uri_segment = 4;

        $total_rows = $this->M_data_barang->get_count();
        $offset     = $this->uri->segment($uri_segment,0);

        $this->data['barang'] = $this->M_data_barang->get($per_page,$offset);

        $this->data['pagination'] = pagination_helper($base_url,$total_rows,$per_page,$uri_segment);
    
            $this->template_admin('v_data_barang', $this->data,true);
     }

    //  --- insert data ---
     public function insert()
     {
        $this->M_data_barang->insert_data();
        redirect('admin/data-barang');
     }

    //  --- edit data ---
    public function edit($id)
    {
        $where = array('id_barang'=>$id);

        $this->data['edit_data'] = $this->M_data_barang->edit_data('tb_data_barang',$where)->result();
        $this->template_admin('v_edit',$this->data,true);
    }

    // --- update data ---
    public function update($id)
    {
        $this->M_data_barang->update_data($id);
        redirect('admin/data-barang');
    }

    // --- delete data ---
    public function delete($id)
    {
        $this->M_data_barang->delete_data($id);
        redirect('admin/data-barang');
    }

    // --- detail data ---
    public function detail($id)
    {
        $data_detail = $this->M_data_barang->detail_data($id);
        $this->data['detail'] = $data_detail;

            $this->template_admin('v_detail',$this->data,true);
    }

    
	
}
