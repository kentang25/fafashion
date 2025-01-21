<?php
    Class M_auth_admin extends CI_model{

        public function insert_data()
        {
            $email      = $this->input->post('email');
            $username   = $this->input->post('username');
            $password   = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                $data = array(
                    'email'     => $email,
                    'username'  => $username,
                    'password'  => $password
                );

                $query = $this->db->insert('tb_auth_admin',$data);
                return $query;
        }

        public function get_admin($username,$password)
        {
            $query = $this->db->get_where('tb_auth_admin', array('username'=>$username));
            $admin = $query->row_array();

                if($admin && password_verify($password,$admin['password'])){
                    return $admin;
                }
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