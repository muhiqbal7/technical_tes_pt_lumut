<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_auth');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['baseTitleSub']   = 'Login Page';
            $this->load->view('template/layout_template/header', $data);
            $this->load->view('template/layout_template/navbar');
            $this->load->view('login');
            $this->load->view('template/layout_template/footer');
        } else {
            $this->_login();
        }
    }

    function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $user       = $this->m_auth->get_user($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username'  => $user['username'],
                    'role'      => $user['role']
                ];
                //login akun
                $this->session->set_userdata($data);
                if ($user['role'] == 'admin') {
                   redirect('home/admin');
                } else if ($user['role'] == 'author') {
                    redirect('home/author');
                } 
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Failed</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Failed</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        //update log status akun
        $username   = $this->session->userdata('username');

        //logout akun
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have Been Loged Out</div>');
        redirect('login');
    }
}
