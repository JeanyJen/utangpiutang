     <?php
    class M_login extends CI_Model {
        private $table = "user";
        function cek($username, $password) {
            $this->db->where("username", $username);
            $this->db->where("password", $password);
            return $this->db->get("user");
        }
        function semua() {
            return $this->db->get("user");
        }
        function cekKode($kode) {
            $this->db->where("username", $kode);
            return $this->db->get("user");
        }
        function cekId($kode) {
            $this->db->where("id_user", $kode);
            return $this->db->get("user");
        }
        function getLoginData($username, $password) {
            $u = mysql_real_escape_string($username);
			$p = mysql_real_escape_string($password);
           //$p = md5(mysql_real_escape_string($psw));
            $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
            if (count($q_cek_login->result()) > 0) {
                foreach ($q_cek_login->result() as $qck) {
                    foreach ($q_cek_login->result() as $qad) {
                        $sess_data['logged_in'] = 'aingLoginWebYeuh';
                        $sess_data['id_user'] = $qad->id_user;
                        $sess_data['username'] = $qad->username;
						 $sess_data['nama_user'] = $qad->nama_user;
						$sess_data['level'] = $qad->level;
                        $sess_data['group'] = $qad->group;
                        $sess_data['rid'] = $qad->rid;
                        $this->session->set_userdata($sess_data);
                    }
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                header('location:' . base_url() . 'login');
            }
        }
    }

