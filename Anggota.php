<?php
class Anggota {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM anggota");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM anggota WHERE id=$id");
    }

    public function create($nama, $pangkat, $jabatan) {
        return $this->conn->query("INSERT INTO anggota(nama,pangkat,jabatan) 
        VALUES('$nama','$pangkat','$jabatan')");
    }

    public function update($id, $nama, $pangkat, $jabatan) {
        return $this->conn->query("UPDATE anggota SET 
        nama='$nama', pangkat='$pangkat', jabatan='$jabatan' 
        WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM anggota WHERE id=$id");
    }
}
?>