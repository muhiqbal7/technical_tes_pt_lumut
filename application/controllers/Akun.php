<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Akun extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_akun');
    }

    public function index()
    {
        $data['baseTitleSub']   = 'Akun Page';
        $data['get_user']       = $this->m_akun->get_data('account');
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar_admin');
        $this->load->view('akun');
        $this->load->view('template/layout_template/footer');
    }

    public function create_akun()
    {
        $data['baseTitleSub']   = 'Create Akun Page';
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar_admin');
        $this->load->view('form_akun');
        $this->load->view('template/layout_template/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('account_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('account_role', 'Role', 'trim|required');

        if($this->form_validation->run() == false) {
            $this->create_akun();
        } else {
            $username       = htmlspecialchars($this->input->post('username', true));
            $password       = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $account_name   = htmlspecialchars($this->input->post('account_name', true));
            $account_role   = htmlspecialchars($this->input->post('account_role', true));

            $data = [
                'username'      => $username,
                'password'      => $password,
                'name'          => $account_name,
                'role'          => $account_role,
            ];

            $this->m_akun->insert($data, 'account');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Create New Account Success</div>');
            redirect('akun');
        }
    }

    public function author()
    {
        $data['baseTitleSub']   = 'Akun Page';
        $this->load->view('template/layout_template/header', $data);
        $this->load->view('template/layout_template/navbar_author');
        $this->load->view('akun_author');
        $this->load->view('template/layout_template/footer');
    }
}