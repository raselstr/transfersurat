<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['content'] = 'about';
		$this->load->view('page/layout',$data);
	}
}
