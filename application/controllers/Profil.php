<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data['content'] = 'profilsaya';//memanggil file konten
		$this->load->model('Profil_model','profilku'); //perintah memanggil file model
		$data['alamat'] = $this->profilku->biodata();
		$data['jk'] = $this->profilku->status();
		$this->load->view('page/layout',$data); //perintah memanggil file layout
	}

	public function about()
	{
		$this->load->view('about');
	}


}
