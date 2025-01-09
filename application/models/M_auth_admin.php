<?php
    Class M_auth_admin extends CI_model{

        public function insert_data()
        {
            $email      = $this->input->post('email');
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');

                $data = array(
                    'email'     => $email,
                    'username'  => $username,
                    'password'  => $password
                );

                $query = $this->db->insert('tb_auth_admin',$data);
                return $query;
        }

        public function get_admin($key,$value)
        {
            $query = $this->db->get('tb_auth_admin',$key,$value);
            return $query->result();
        }

        public function is_loggin()
        {
            if(!isset($_SESSION['is_loggedin'])){
                return FALSE;
            }else{
                return TRUE;
            }
        }

    }
?>