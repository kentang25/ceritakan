<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceritamu extends FrontendController {
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

        $this->load->model('M_ceritamu');
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

        $this->data['ceritamu'] = $this->M_ceritamu->tampil_data()->result();
        $this->data['kategori'] = $this->M_ceritamu->tampil_kategori()->result();
        $this->template_user('v_ceritamu',$this->data,true);
		
	}

    public function detail_ceritamu($id_cerita)
    {
        $this->data['detail_ceritamu'] = $this->M_ceritamu->detail_cerita($id_cerita);
        $this->data['kategori'] = $this->M_ceritamu->tampil_kategori()->result();
        
        $this->template_user('v_detail_cerita',$this->data,true);
    }

    public function kategori_cerita($kategori)
    {
        $this->data['kategori_ceritamu'] = $this->M_ceritamu->kategori($kategori);
        $this->data['kategori'] = $this->M_ceritamu->tampil_kategori()->result();
        // var_dump($this->data['kategori_ceritamu']);
        // exit();

        $this->template_user('v_kategori',$this->data,true);
    }


}
