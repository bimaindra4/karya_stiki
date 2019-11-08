<?php
class M_dashboard extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
    }
    
    function getJumlahKarya($prodi) {
        $this->db->select("COUNT(*) AS jumlah");
        $this->db->where("id_prodi", $prodi);
        $sql = $this->db->get("tbl_karya_mhs");

        return $sql->row()->jumlah;
    }
}