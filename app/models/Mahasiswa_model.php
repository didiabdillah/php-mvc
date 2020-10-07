<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Didi",
            "nim" => "1803009",
            "kelas" => "D3TI3A"
        ],
        [
            "nama" => "Abdillah",
            "nim" => "1803010",
            "kelas" => "D3TI2A"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
