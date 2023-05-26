<?php
    $dta[0]["NIM"] = "2201010736";
    $dta[0]["Nama"] = "Nadia";
    $dta[0]["Ttl"] = "2004-02-14";
    $dta[0]["Alamat"] = "Lombok";
    $dta[0]["Jurusan"] = "TI-PARIWISATA";
    $dta[0]["JKEL"] = "P";

    $dta[1]["NIM"] = "2201010097";
    $dta[1]["Nama"] = "Tiara";
    $dta[1]["Ttl"] = "2004-09-19";
    $dta[1]["Alamat"] = "Jawa";
    $dta[1]["Jurusan"] = "TI-PARIWISATA";
    $dta[1]["JKEL"] = "P";

    $dta[2]["NIM"] = "2201010123";
    $dta[2]["Nama"] = "Cio";
    $dta[2]["Ttl"] = "2003-03-13";
    $dta[2]["Alamat"] = "Bali";
    $dta[2]["Jurusan"] = "TI-PARIWISATA";
    $dta[2]["JKEL"] = "L";

    $dta[3]["NIM"] = "2201010456";
    $dta[3]["Nama"] = "Seva";
    $dta[3]["Ttl"] = "2003-02-15";
    $dta[3]["Alamat"] = "Lombok";
    $dta[3]["Jurusan"] = "TI-PARIWISATA";
    $dta[3]["JKEL"] = "L";

    $dta[4]["NIM"] = "2201010789";
    $dta[4]["Nama"] = "Joy";
    $dta[4]["Ttl"] = "2002-05-14";
    $dta[4]["Alamat"] = "Labuan Bajo";
    $dta[4]["Jurusan"] = "TI-PARIWISATA";
    $dta[4]["JKEL"] = "L";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);