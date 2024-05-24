<?php 
class M_admin extends CI_Model{

	public function get_admin(){
		return $this->db->get('admin');
		//perintah diatas sama dengan select * from admin
	}

	public function insert_admin($data){
		$this->db->insert('admin', $data);
	}

	public function update_admin($data, $id_admin){
		$this->db->where('id_admin',$id_admin);
		$this->db->update('admin', $data);
	}

	public function hapus_admin($id_admin){
		$this->db->where('id_admin',$id_admin);
		$this->db->delete('admin');
	}

	public function get_data_by_id($id_admin){
		return $this->db->get_where('admin', array('id_admin' => $id_admin));
	}
 }
?>