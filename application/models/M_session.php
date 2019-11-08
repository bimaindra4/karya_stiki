<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_session extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_session(){
		$data['session_email'] = $this->session->userdata('session_email');
		$data['session_status'] = $this->session->userdata('session_status');
		$data['session_id'] = $this->session->userdata('session_id');
		$data['session_nama'] = $this->session->userdata('session_nama');
		return $data;
	}

	function store_session($userid,$role,$status,$nama){
		$this->session->set_userdata('session_email', $userid);
		$this->session->set_userdata('session_status', $role);
		$this->session->set_userdata('session_id', $status);
		$this->session->set_userdata('session_nama', $nama);
	}

	function destroy_session() {
		$this->session->unset_userdata('session_email');
		$this->session->unset_userdata('session_status');
		$this->session->unset_userdata('session_id');
		$this->session->unset_userdata('session_nama');
	}
}