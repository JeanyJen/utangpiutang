<?php
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model(array('m_login'));
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
    }
    function index() {
        $this->load->view('login');
    }
    function proses() {
    $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $u = mysql_real_escape_string($username);
			$p = mysql_real_escape_string($password);
           //$p = md5(mysql_real_escape_string($password));
            $cek = $this->m_login->cek($u,$p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['id_user'] = $qad->id_user;
                    $sess_data['username'] = $qad->username;
					 $sess_data['nama_user'] = $qad->nama_user;
                    $sess_data['level'] = $qad->level;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }
    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}