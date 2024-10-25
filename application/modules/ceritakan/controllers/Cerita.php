<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends FrontendController {
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

        $this->load->model('M_cerita');
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
        $this->data['kategori'] = $this->M_cerita->get_kategori()->result();
        $this->template_user('v_cerita',$this->data,true);
	}

    public function insert()
    {
        $this->M_cerita->insert_data();
        redirect('ceritakan');
    }

    // public function get_kategori()
    // {
    //     $this->template_user('v_cerita',$this->data,true);
    // }





}
