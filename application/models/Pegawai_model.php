<?php  
    class Pegawai_model extends CI_Model {
        public function getdata()
        {
            return $this->db->get('pegawai');
        }
        
        public function tambah($data)
        {
            return $this->db->insert('pegawai',$data);
        }

        public function hapus($nip)
        {
            return $this->db->delete('pegawai',['nip'=>$nip]);
        }

        public function ambildata($id)
        {
            $this->db->Where('nip',$id);
            $query = $this->db->get('pegawai');
            return $query->row();
        }

        public function update($id, $data)
        {
            $this->db->where('nip', $id);
            $this->db->update('pegawai', $data);
        }

        public function get_keyword($keyword){
            $this->db->select('*');
            $this->db->from('pegawai');
            $this->db->like('nip',$keyword);
            $this->db->or_like('namalengkap',$keyword);
            $this->db->or_like('tptlahir',$keyword);
            $this->db->or_like('jk',$keyword);
            $this->db->or_like('alamat',$keyword);
            $this->db->or_like('jabatan',$keyword);
            $this->db->or_like('gol',$keyword);
            return $this->db->get()->result();


        }
    }
?>