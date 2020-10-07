<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    //Database Handler
    private $dbh;

    //Statement
    private $stmt;

    public function __construct()
    {
        //Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        //Untuk Mengoptimasi Koneksi Ke Database
        $options = [
            PDO::ATTR_PERSISTENT => true,  //Agar Koneksinya Terjaga Terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Untuk Mode Error Menampilkan Exception
        ];


        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
