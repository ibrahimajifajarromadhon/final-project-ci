<?php 
class Crud_wisata extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');
	}

	public function index(){
		$data['wisata'] = $this->M_wisata->get_wisata()->result_array();
		$this->load->view('wisata/main_wisata', $data);
	}

	public function tambah_wisata(){
		$this->load->view('wisata/form_tambah');
	}

	public function aksi_simpan(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$gambar = $_FILES['gambar'];
		if ($gambar='') {
		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Upload Gagal"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'gambar' => $gambar
			);

		$this->M_wisata->insert_wisata ($data);
		if($this->db->affected_rows()){
			redirect('crud_wisata');
		} else {
			redirect('crud_wisata/tambah_wisata');
		}
	}

	public function edit($id){
		$data['wisata'] = $this->M_wisata->get_data_by_id($id)->row_array();
		$this->load->view('wisata/form_edit', $data);
	}

	public function aksi_edit(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$gambar = $_FILES['gambar'];
		if ($gambar='') {
		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Upload Gagal"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'gambar' => $gambar
			);
		$this->M_wisata->update_wisata ($data, $id);
		if($this->db->affected_rows()){
			redirect('crud_wisata');
		} else {
			redirect('crud_wisata/edit/'.$id);
		}

	}

	public function hapus($id){
		$this->M_wisata->hapus_wisata($id);
		if($this->db->affected_rows()){
			redirect('crud_wisata');
		} else {
			echo "Data Gagal Dihapus";
		}
	}

}
?>