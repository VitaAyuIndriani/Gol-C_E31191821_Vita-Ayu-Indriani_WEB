<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Testhelper extends CI_Controller{
	function_construct (){
		parent::_construct();
		$this->load->helper('html');
	}
	public function index(){
		$this->load->view('view_helper');
	}
	
}