<?php
  class Wisata_model extends CI_Model{
    private $table = "tempat_wisata";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
      $this->db->where("id", $id);
      $query = $this->db->get($this->table);
      return $query->row();
    }

    public function save($data){
      $sql = "INSERT INTO tempat_wisata (nama,alamat,latlong,jenis_id,skor_rating,harga_tiket,foto1,foto2,foto3,kecamatan_id,website,fasilitas)
      VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
      $this->db->query($sql,$data);

      return $this->db->insert_id();
    }

    public function update($data){
        // UPDATE
        $sql = "UPDATE tempat_wisata SET nama=?,alamat=?,latlong=?,jenis_id=?,
        skor_rating=?,harga_tiket=?,foto1=?,foto2=?,foto3=?,kecamatan_id=?,website=?,fasilitas=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        // DELETE FROM mahasiswa WHERE nim=$id;
        $sql = "delete from tempat_wisata where id=?";
        $this->db->query($sql,array($id));
    }

    public function update_foto($array){
      $sql = "UPDATE tempat_wisata SET foto1=? WHERE id=?";
      $this->db->query($sql, $array);
  }
}
