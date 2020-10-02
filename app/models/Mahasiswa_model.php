<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Avip Syaifulloh",
    //         "nrp" => "183040024",
    //         "email" => "syaifulloh.183040024@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika",
    //     ],
    //     [
    //         "nama" => "Bakhtiar",
    //         "nrp" => "183040004",
    //         "email" => "bakhtiar.183040004@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Rizky Ramadhan",
    //         "nrp" => "183040008",
    //         "email" => "ramadhan.183040008@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];


    private $table = 'mahasiswa_1';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
