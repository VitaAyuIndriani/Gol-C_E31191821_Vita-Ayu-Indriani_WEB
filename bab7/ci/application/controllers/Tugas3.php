<?php
	class Tugas3 extends CI_Controller{
		public function index() {
			$this->load->model('Tugas3');
			$data = $this->Tugasno3->tampil_txt();
			echo $data;
		}
	}
?>