<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    protected $rootDir;
    protected $template_prodi;

    public function __construct() {
        parent::__construct();

        $this->rootDir = "prodi/";
        $this->template_prodi = [
            "header" => $this->load->view('template/header_prodi', '', TRUE),
            "footer" => $this->load->view('template/footer_prodi', '', TRUE)
        ];
    }

    function profil($id) {
        $data = $this->template_prodi;
        $this->load->view($this->rootDir."mhs_karya", $data);
    }

    function karya($id) {
        $data = $this->template_prodi;
        $this->load->view($this->rootDir."mhs_karya", $data);
    }
}

?>