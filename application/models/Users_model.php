<?php 
 class Users_model extends CI_Model{

     private $table = "users" ;
     
     public function getAll(){
         $query = $this->db->get($this->table);
         return $query->result() ;
     }

     public function findById($id){
  
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row() ;
     } 

     public function login($Uname,$pass){
         $sql =  "SELECT * FROM users WHERE username=? and password=MD5(?)" ;
         $data = [$Uname,$pass] ;
         $query = $this->db->query($sql,$data) ;
         return $query->row() ;
     }

     public function registrasi($data){
        $sql = "INSERT INTO users 
        (id, username, password, email, created_at, last_login,status,role)
        VALUES (default,?,MD5(?),?,now(),now(),?,?)" ;
        $this->db->query($sql, $data) ;
     }

}