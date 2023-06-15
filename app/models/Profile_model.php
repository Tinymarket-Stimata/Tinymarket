<?php

class Profile_model {

    private $table = "profile_user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO profile_user
                    VALUES
                    ('', :nama, :jkelamin, :tahunlahir, :email, :nomor)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama'];);
        $this->db->bind('jkelamin', $data['jkelamin'];);
        $this->db->bind('tahunlahir', $data['tahunlahir'];);
        $this->db->bind('email', $data['email'];);
        $this->db->bind('nomor', $data['nomor'];);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->query('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}