<?php
class Komentar_model extends CI_Model {

    private $table = 'komentar';

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO komentar (tanggal,isi,users_id,wisata_id,nilai_rating_id)
        VALUES (?,?,?,?,?)";
        $this->db->query($sql,$data);

        return $this->db->insert_id();
    }

    public function update($data){
        // UPDATE
        $sql = "UPDATE komentar SET tanggal=?,isi=?,users_id=?,wisata_id=?,
        nilai_rating_id=? WHERE users_id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        // DELETE
        $sql = "delete from komentar where id=?";
        $this->db->query($sql,array($id));
    }
    
}