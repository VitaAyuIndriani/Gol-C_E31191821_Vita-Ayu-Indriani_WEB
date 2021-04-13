<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	public function index(){
		/*$data['nama'] = "Kim Jefry";
		$data['prodi'] = "MIF";
		$this->load->view('view_mahasiswa',$data);*/

		/*$data['Mahasiswa'] = [
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan"," prodi "=>"TKK"],
			["nama"=>"Budi Sudarsono"," prodi "=>"TIF"]
			];
			$this->load->view('view_mahasiswa ',$data);}*/

		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('view_mahasiswa',$data);
	}

	public function prodi(){
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data1();
		$this->load->view('view_mahasiswa_prodi',$data);
	}

	public function angkatan(){
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data2();
		$this->load->view('view_mahasiswa_angkatan',$data);
	}

	public function profil(){
		echo "ini adalah method profil pada controller Mahasiswa";
	}
}
?>