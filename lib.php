<?php

    function convertDateDBtoIndo($string){
        // contoh : 2019-01-30
        
        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

        $tanggal = explode("-", $string)[2];
        $bulan = explode("-", $string)[1];
        $tahun = explode("-", $string)[0];

        return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
    }

    function convertDateTimeDBtoIndo($string){
        // contoh : 2019-01-30 10:20:20
        
        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

        $date = explode(" ", $string)[0];
        $time = explode(" ", $string)[1];
        
        $tanggal = explode("-", $date)[2];
        $bulan = explode("-", $date)[1];
        $tahun = explode("-", $date)[0];
        
        

        return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun . " " . $time;
    }


    function convertDateIndotoDB($string){
        // contoh : 17 Agustus 2019
        
        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

        $tanggal = explode(" ", $string)[0];
        $bulan = sprintf('%02d', array_search(explode(" ", $string)[1], $bulanIndo));
        $tahun = explode(" ", $string)[2];

        return $tahun . "-" . $bulan . "-" . $tanggal;
    }

    function convertDateTimeIndotoDB($string){
        // contoh : 17 Agustus 2019 10:20:20
        
        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

        $tanggal = explode(" ", $string)[0];
        $bulan = sprintf('%02d', array_search(explode(" ", $string)[1], $bulanIndo));
        $tahun = explode(" ", $string)[2];
        $jam = explode(" ", $string)[3];
        

        return $tahun . "-" . $bulan . "-" . $tanggal . " " . $jam;
    }
?>