<?php
    class model_general extends CI_Model {
        
        public function cek_kasir($username,$password)
        {
            return $this->db->query("SELECT * FROM tb_kasir WHERE username = '$username' AND password = '$password' LIMIT 1");
        }

        public function cek_manajer($username,$password)
        {
            return $this->db->query("SELECT * FROM tb_manajer WHERE username = '$username' AND password = '$password' LIMIT 1");
        }

        public function count_id_manajer()
        {
            $query = $this->db->get('tb_manajer');
            return $query->num_rows() + 1;
        }

        public function get_tabel_menu_kasir()
        {
            return $this->db->select('*')
                            ->from('tb_menu')
                            ->order_by('id_menu', 'DESC')
                            ->get()
                            ->result();
        }

        public function get_detail_menu($idmenu)
        {
            return $this->db->select('*')
                            ->from('tb_menu')
                            ->where('id_menu', $idmenu)
                            ->get()
                            ->row();
        }

        public function get_detail_karyawan($idkasir)
        {
            return $this->db->select('*')
                            ->from('tb_kasir')
                            ->where('id_kasir', $idkasir)
                            ->get()
                            ->row();
        }

        public function get_tabel_menu_manajer($idmanajer)
        {
            return $this->db->select('*')
                            ->from('tb_menu')
                            ->where('id_manajer', $idmanajer)
                            ->order_by('id_menu', 'DESC')
                            ->get()
                            ->result();
        }

        public function get_tabel_karyawan($idmanajer)
        {
            return $this->db->select('*')
                            ->from('tb_kasir')
                            ->where('id_manajer', $idmanajer)
                            ->order_by('id_kasir', 'DESC')
                            ->get()
                            ->result();
        }

        public function find($id)
        {
            $result = $this->db->where('id_menu', $id)
                               ->limit(1)
                               ->get('tb_menu');
            if($result->num_rows() > 0) {
                return $result->row();
            } else {
                return array();
            }
        }
    }
?>