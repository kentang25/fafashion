<?php

    Class M_auth_user extends CI_Model{

        public function insert_data_user()
        {
            $username   = $this->input->post('username');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');

                $data = array(

                    'username'  => $username,
                    'email'     => $email,
                    'password'  => $password

                );

                $query = $this->db->insert('tb_auth',$data);
                return $query;
        }

        public function get_user($key,$value)
        {
            $query = $this->db->get_where('tb_auth', array($key=>$value));
            if($query->row_array()){
                return $query->row_array();
            }else{
                return FALSE;
            }
        }

        public function is_Loggedin()
		{
			if(!isset($_SESSION['is_logged_in'])){
				return FALSE;
			}else{
				return TRUE;
			}
		}

        public function get_id_user()
        {
            return $this->session->userdata('id_user');
        }

    }

?>