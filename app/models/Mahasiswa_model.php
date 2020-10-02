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

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa_1 VALUES('', :nama, :nrp, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa_1 WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
