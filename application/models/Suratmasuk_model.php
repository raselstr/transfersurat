<?php 

class Suratmasuk_model extends CI_Model {

	public function getData()
	{
		return $this->db->get('suratmasuk');
	}

	public function tambah($data)
	{
		return $this->db->insert('suratmasuk',$data);
	}

	public function hapus($id)
	{
		return $this->db->delete('suratmasuk',['id'=>$id]);
	}

	

}