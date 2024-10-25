<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceritakan extends FrontendController {
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

        $this->load->model('M_ceritakan');
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

        $this->data['cerita'] = $this->M_ceritakan->tampil_data()->result();
        $this->template_user('v_ceritakan',$this->data,true);
		
	}

    // --- tentang ---

    public function tentang()
    {
        $this->template_user('v_tentang',$this->data,true);
    }

    // --- kebijakan ---

    public function kebijakan()
    {
        $this->template_user('v_kebijakan',$this->data,true);
    }

    // --- kontak ---

    public function kontak_kami()
    {
        $this->template_user('v_kontak_kami',$this->data,true);

        $this->M_ceritakan->insert_kontak();
        redirect('ceritakan');
    }

}
