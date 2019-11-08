<?php
class M_karya extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getDataKarya($id = "") {
		if($id == "") {
            $this->db->select("tkm.id_karya_url AS _uid, tmp.prodi_nama AS prodi, tkm.karya_nama AS judul, tkm.karya_tgl_buat AS tanggal, tkm.karya_status AS status");
            $this->db->join("tbl_master_prodi tmp", "tkm.id_prodi = tmp.id_prodi");
            $sql = $this->db->get("tbl_karya_mhs tkm");
            
            if($sql->num_rows() > 0) {
                foreach($sql->result() as $row) {
                    $karya['_uid'] = $row->_uid;
                    $karya['prodi'] = $row->prodi;
                    $karya['judul'] = $row->judul;
                    $karya['tgl_buat'] = $row->tanggal;
                    $karya['pencipta'] = $this->getPenciptaKarya($row->_uid);
                    $karya['status'] = (int) $row->status;

                    $data[] = $karya;
                }
            } else {
                $data[] = [];
            }

            return json_encode($data);
        } else {
            $this->db->select("tkm.*, tmp.prodi_nama AS prodi");
            $this->db->join("tbl_master_prodi tmp", "tkm.id_prodi = tmp.id_prodi");
			$this->db->where("tkm.id_karya_url", $id);
            $sql = $this->db->get("tbl_karya_mhs tkm");

            $row = $sql->row();

            $data['_uid'] = $row->id_karya_url;
            $data['judul'] = $row->karya_nama;
            $data['prodi'] = $row->prodi;
            $data['kategori'] = '';
            $data['pencipta'] = $this->getPenciptaKarya($row->id_karya_url);
            $data['tanggal'] = $row->karya_tgl_buat;
            $data['deskripsi'] = $row->karya_deskripsi;
            $data['hki'] = $row->karya_status;
            $data['status'] = $row->karya_status;

            return json_encode($data);
        }
    }

    function getPenciptaKarya($uid) {
        $this->db->select("tmm.mhs_nama AS nama");
        $this->db->join("tbl_master_mahasiswa tmm", "tkd.id_mahasiswa = tmm.id_mahasiswa");
        $this->db->join("tbl_karya_mhs tkm", "tkd.id_karya = tkm.id_karya");
        $this->db->where("tkm.id_karya_url", $uid);
        $sql = $this->db->get("tbl_karya_detail tkd");

        if($sql->num_rows() > 0) {
            foreach($sql->result() as $row) {
                $cipta['nama'] = $row->nama;
                $data[] = $cipta;
            }
        } else {
            $data = [];
        }

        return $data;
    }

    function getKaryaByColumn($key,$value) {
        $this->db->select("tkm.*, tmp.prodi_nama AS prodi");
        $this->db->join("tbl_master_prodi tmp", "tkm.id_prodi = tmp.id_prodi");
        $this->db->where($key, $value);
        $sql = $this->db->get("tbl_karya_mhs tkm");
        
        if($sql->num_rows() == 0) {
            $data['data'] = [];
        } else {
            $karya = $sql->result();
            $data['data'] = $karya;
        }

        return json_encode($data); 
    }

    function searchDataKarya($key) {
        $this->db->like("karya_nama", $key);
        $sql = $this->db->get("tbl_karya_mhs");
        return $sql->result(); 
    }
    
    function tambahKarya($data) {
        $this->db->insert("tbl_karya_mhs", $data);
        return true;
    }

    function editKarya($data,$id) {
        if($id == "" || empty($id)) {
            return false;
        } else {
            $this->db->update("tbl_karya_mhs", $data, ["id_karya_url" => $id]);
            return true;
        }
    }

    function hapusKarya($id) {
        if($id == "" || empty($id)) {
            return false;
        } else {
            $this->db->delete("tbl_karya_mhs", ["id_karya_url" => $id]);
            return true;
        }
    }

    function validasiKarya($id) {
        if($id == "" || empty($id)) {
            return false;
        } else {
            $data = ["karya_status" => 1];
            $this->db->update("tbl_karya_mhs", $data, ["id_karya_url" => $id]);
            return true;
        }
    }
}
?>