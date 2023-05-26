<?php
    $dta["NIM"] = "2201010736";
    $dta["Nama"] = "Nadia";
    $dta["Ttl"] = "2004-02-14";
    $dta["Alamat"] = "Lombok";
    $dta["Jurusan"] = "TI-PARIWISATA";
    $dta["JKEL"] = "P";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);