<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manual extends CI_Controller {

	public function index()
	{
		//menu active
		$data=array(	
			'pendaftaran_active' 	=> 'class=""',
			'panduanpendaftaran_active' 	=> 'class="active"'
			);
		//title head
		$data['title']='Manual PSB | MAU-MBI Amanatul Ummah Surabaya';
		
		$this->load->view('calonsiswa/v_manual', $data);

	}


}