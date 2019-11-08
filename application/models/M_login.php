<?php
class M_login extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function auth($email,$pass) {
		if(empty($email) || empty($pass)) {
			return false;
		} else {
			$db = $this->db->query("SELECT tmm.id_mahasiswa_url AS id, tmm.mhs_email AS email, tmm.password AS password, tmm.mhs_nama AS nama, '1' AS status
									FROM tbl_master_mahasiswa tmm WHERE tmm.mhs_email='$email' AND tmm.password='$pass'
									UNION
									SELECT tmp.id_prodi_url AS id, tmp.prodi_email AS email, tmp.password AS password, tmp.prodi_nama AS nama, '2' AS status 
									FROM tbl_master_prodi tmp WHERE tmp.prodi_email='$email' AND tmp.password='$pass'");

            return $db->row();
        }
	}
}
?>