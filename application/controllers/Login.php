<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("M_session");
        $this->load->model("M_login");
    }

    function index() {
        $this->load->view('login');
    }

    function proses() {
        $email = $this->input->post('email');
        $pass = sha1($this->input->post('password'));
        
        $proc = $this->M_login->auth($email,$pass);
        if($proc->email == $email && $proc->password == $pass) {
            if($proc->status == 1) {
                // Mahasiswa
                $this->M_session->store_session($proc->email, 1, $proc->id, $proc->nama);
                redirect('dashboard');
            } else if($proc->status == 2) {
                // Prodi
                $this->M_session->store_session($proc->email, 2, $proc->id, $proc->nama);
                redirect('dashboard');
            } else {
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }
}

?>