<?php 
class Welcome_aboutus extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');
	}

	public function index(){
		$data['wisata'] = $this->M_wisata->get_wisata()->result_array();
		$this->load->view('utama/aboutus', $data);
	}

}
?>