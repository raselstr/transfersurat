<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratmasuk extends CI_Controller {

	public function index()
	{
		$data['content'] = 'suratmasuk/view';
		$this->load->model('Suratmasuk_model','msuratmasuk');
		$data['record'] = $this->msuratmasuk->getData()->result();
		$this->load->view('page/layout',$data);
	}

	public function add()
	{
		$data['content'] = 'suratmasuk/add';
		$this->load->model('Suratmasuk_model','msuratmasuk');
		
		$this->load->view('page/layout',$data);
	}

	public function prosesadd()
	{
		$nosurat = $this->input->post('nosurat');
		$perihal = $this->input->post('perihal');
		$asalsurat = $this->input->post('asalsurat');
		$tgl = $this->input->post('tgl');
		$ttd = $this->input->post('ttd');

		$data = [
			'nosurat'=>$nosurat,
			'perihal'=>$perihal,
			'asal_surat'=>$asalsurat,
			'tgl_surat'=>$tgl,
			'ttd'=>$ttd,
		];

		$this->load->model('Suratmasuk_model','msuratmasuk');
		// proses input/ tambah
		$this->msuratmasuk->tambah($data);
		redirect('suratmasuk');
		
	}

	public function delete($id)
	{
		$this->load->model('Suratmasuk_model','msuratmasuk');
		$this->msuratmasuk->hapus($id);
		redirect('suratmasuk');
	}



}
