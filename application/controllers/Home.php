<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['baseTitleSub']   = 'Home Page';
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar');
        $this->load->view('beranda');
        $this->load->view('template/layout_template/footer');
    }

    public function admin()
    {
        $data['baseTitleSub']   = 'Home Admin Page';
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar_admin');
        $this->load->view('beranda');
        $this->load->view('template/layout_template/footer');
    }

    public function author()
    {
        $data['baseTitleSub']   = 'Home Author Page';
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar_author');
        $this->load->view('beranda');
        $this->load->view('template/layout_template/footer');
    }
}