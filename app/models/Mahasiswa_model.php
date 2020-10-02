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

    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa_1');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
