<?php
class Teammembers_Model extends CI_Model{
    public function add($post){
    
        $add = $this->db->insert('member',$post);
        return $add;

    }
    public function update($post,$id){
        $this->db->where('MemberId', $id);
        $add = $this->db->update('member',$post);
        return $add;
    }

    public function delete($id){
        $post = array(
            'IsDeleted' => 1
        );
        $this->db->where('MemberId', $id);
        $add = $this->db->update('member',$post);
        return $add;
    }
    

    public function all(){
        //select * from member where IsDeleted = 0
        $this->db->where('IsDeleted', '0');  
       
        $query = $this->db->get('member')->result_array();  

        return $query;
    }
    //get_one
    public function get_one($id=0){
        //select * from member where IsDeleted = 0
        $this->db->where('IsDeleted', '0');  
        $this->db->where('MemberId', $id); 
       
        $query = $this->db->get('member')->result_array();  

        return $query;
    }
    public function get_one_obj($id=0){
        //select * from member where IsDeleted = 0
        $this->db->where('IsDeleted', '0');  
        $this->db->where('MemberId', $id); 
       
        $query = $this->db->get('member')->result();  

        return $query;
    }
}