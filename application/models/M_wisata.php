<?php 
class M_wisata extends CI_Model{

	public function get_wisata(){
		return $this->db->get('wisata');
		//perintah diatas sama dengan select * from wisata
	}

	public function insert_wisata($data){
		$this->db->insert('wisata', $data);
	}

	public function update_wisata($data, $id){
		$this->db->where('id',$id);
		$this->db->update('wisata', $data);
	}

	public function hapus_wisata($id){
		$this->db->where('id',$id);
		$this->db->delete('wisata');
	}

	public function get_data_by_id($id){
		return $this->db->get_where('wisata', array('id' => $id));
	}
 }
?>