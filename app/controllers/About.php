<?php

class About
{

    public function index($nama = "Didi", $pekerjaan = "Dev")
    {
        echo "Nama : " . $nama . " , Pekerjaan : " . $pekerjaan;
    }

    public function page()
    {
        echo "about/page";
    }
}
