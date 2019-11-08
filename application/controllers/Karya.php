<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {
    protected $rootDir;
    protected $templateHead;
    protected $templateFoot;

    protected $sess;
    protected $sess_data;
    protected $sess_not_con;
    public function __construct() {
        parent::__construct();
        $this->load->model("M_session");
        $this->load->model("M_karya");
        
        // Session data
        $this->sess = $this->M_session->get_session();
        $this->sess_not_con = !$this->sess['session_email'] && !$this->sess['session_id'];
        $this->sess_data = [
			"user_email" => $this->sess['session_email'],
			"user_id" => $this->sess['session_id'],
			"user_nama" => $this->sess['session_nama'],
			"user_stts" => $this->sess['session_status']
        ];
        
        // Template data
        if($this->sess['session_status'] == 1) {
            $this->rootDir = "mhs/";
            $this->templateHead = $this->load->view('template/header_mhs', $this->sess_data, TRUE);
            $this->templateFoot = $this->load->view('template/footer_mhs', '', TRUE);
        } else if($this->sess['session_status'] == 2) {
            $this->rootDir = "prodi/";
            $this->templateHead = $this->load->view('template/header_prodi', $this->sess_data, TRUE);
            $this->templateFoot = $this->load->view('template/footer_prodi', '', TRUE);
        } 
    }

    function index() {
        if($this->sess_not_con) {
            redirect("login");
        } else {
            $data['header'] = $this->templateHead;
            $data['footer'] = $this->templateFoot;
            $data['karya'] = $this->M_karya->getDataKarya();
            $this->load->view($this->rootDir."karya_all", $data);
        }
    }

    function detail($id) {
        if($this->sess_not_con) {
            redirect("login");
        } else {
            $data['header'] = $this->templateHead;
            $data['footer'] = $this->templateFoot;
            $data['karya'] = json_decode($this->M_karya->getDataKarya($id));
            $this->load->view($this->rootDir."karya_detail", $data);
        }
    }

    function validasi() {
        if($this->sess_not_con) {
            redirect("login");
        } else {
            $data['header'] = $this->templateHead;
            $data['footer'] = $this->templateFoot;
            $data['karya'] = $this->M_karya->getKaryaByColumn("tkm.karya_status", 0);
            $this->load->view($this->rootDir."karya_validasi", $data);
        }
    }

    function tambah_karya() {

    }

    function edit_karya() {

    }

    function hapus_karya() {
    	
    }

    function validasi_karya($id) {
        $this->M_karya->validasiKarya($id);
    }
}

?>