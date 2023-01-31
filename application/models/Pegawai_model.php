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
    }
?>