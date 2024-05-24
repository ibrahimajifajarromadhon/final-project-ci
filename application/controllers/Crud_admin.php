<?php 
class Crud_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index(){
		$data['admin'] = $this->M_admin->get_admin()->result_array();
		$this->load->view('admin/main_admin', $data);
	}

	public function tambah_admin(){
		$this->load->view('admin/form_tambah');
	}

	public function aksi_simpan(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => $password
			);
		$this->M_admin->insert_admin ($data);
		if($this->db->affected_rows()){
			redirect('crud_admin');
		} else {
			redirect('crud_admin/tambah_admin');
		}
	}

	public function edit($id_admin){
		$data['admin'] = $this->M_admin->get_data_by_id($id_admin)->row_array();
		$this->load->view('admin/form_edit', $data);
	}

	public function aksi_edit(){
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => $password
			);
		$this->M_admin->update_admin ($data, $id_admin);
		if($this->db->affected_rows()){
			redirect('crud_admin');
		} else {
			redirect('crud_admin/edit/'.$id_admin);
		}
	}

	public function hapus($id_admin){
		$this->M_admin->hapus_admin($id_admin);
		if($this->db->affected_rows()){
			redirect('crud_admin');
		} else {
			echo "Data Gagal Dihapus";
		}
	}

}
?>