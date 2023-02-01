<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function index()
    {
        $data['content'] = 'pegawai/view';
        $this->load->model('Pegawai_model','mpegawai');
        $data['record'] = $this->mpegawai->getData()->result();
        $this->load->view('page/layout',$data);

    }

    public function tambahin()
    {
        $data['content'] = 'pegawai/add';
        $this->load->model('Pegawai_model','mpegawai');
        $this->load->view('page/layout',$data);
    }

    public function prosestambahin()
    {
        $nip = $this->input->post('nip');
        $namalengkap = $this->input->post('namalengkap');
        $tptlahir = $this->input->post('tptlahir');
        $tgllahir = $this->input->post('tgllahir');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $jabatan = $this->input->post('jabatan');
        $gol = $this->input->post('gol');

        $data = [
            'nip'=>$nip,
            'namalengkap'=>$namalengkap,
            'tptlahir'=>$tptlahir,
            'tgllahir'=>$tgllahir,
            'jk'=>$jk,
            'alamat'=>$alamat,
            'jabatan'=>$jabatan,
            'gol'=>$gol,

        ];
        $this->load->model('Pegawai_model','mpegawai');
        $this->mpegawai->tambah($data);
        redirect('pegawai');
       
    }

    public function buang($nip)
    {
        $this->load->model('Pegawai_model','mpegawai');
        $this->mpegawai->hapus($nip);
        redirect('pegawai');
    }
 
    public function halaman_edit($id)
    {
        $data['content'] = 'pegawai/edit';
        $this->load->model('Pegawai_model','mpegawai');
        $data['record'] = $this->mpegawai->ambildata($id);
        $this->load->view('page/layout', $data);

    }

    public function fungsiedit()
    {
        $nip = $this->input->post('nip');
        $namalengkap = $this->input->post('namalengkap');
        $tptlahir = $this->input->post('tptlahir');
        $tgllahir = $this->input->post('tgllahir');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $jabatan = $this->input->post('jabatan');
        $gol = $this->input->post('gol');

        $data = [
            'namalengkap'=>$namalengkap,
            'tptlahir'=>$tptlahir,
            'tgllahir'=>$tgllahir,
            'jk'=>$jk,
            'alamat'=>$alamat,
            'jabatan'=>$jabatan,
            'gol'=>$gol,
        ];

        $this->load->model('pegawai_model','mpegawai');
        $this->mpegawai->update($nip,$data);
        redirect('pegawai');
    }

}

?>