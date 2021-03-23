<?php
class Hello2 extends CI_Controller{
	public function index(){
		//echo "<h2>Hello World dari CI Model</h2>";

		//memanggil file view
		$this->load->view('variabelview', $data);//file view
		//deklarasi data
		$data = ['variabel1' => 'Data variabel ke-1', 'variabel2' => 'Data variabel ke-2'];
	}
}
?>