<?php
class User_Model extends CI_Model{
    public function login($username, $password) {  
  
        $this->db->where('UserName', $username);  
        $this->db->where('Password', $password);  
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    } 

    public function get_user($username, $password){
        $this->db->where('UserName', $username);  
        $this->db->where('Password', $password);  
        $query = $this->db->get('users')->result();  
  
        
            return $query;  
         
    }
}