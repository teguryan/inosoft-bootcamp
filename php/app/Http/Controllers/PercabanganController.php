<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PercabanganController extends Controller
{
    public function pertama(){
        $barangBawaan = "dompet";
        $apakahHujan = true;

        if($apakahHujan){
            $barangBawaan = $barangBawaan . ' dan payung';
        }

        $statement = "Budi membawa ".$barangBawaan;

        return $statement;
    }

    public function kedua(){
        $umur = 20; //cukup umur

        if($umur >= 18){
            $statement = 'cukup umur';
        }else{
            $statement = 'belum cukup umur';
        }

        return $statement;
    }

    public function ketiga(){
        $umur = 20; //dewasa

        if($umur < 12){
            $statement = 'anak-anak';
        }else if($umur >= 12 && $umur <= 18){
            $statement = "remaja";
        }else if($umur > 18 && $umur <= 50){
            $statement = "dewasa";
        }else{
            $statement = 'lansia';
        }

        return $statement;
    }

    public function keempat(){
        $usahaku = 100;
        $usahadia = 80;

        if ($usahaku > $usahadia) {
            $usahadia += 3;

            if($usahaku > $usahadia){
                $hasil = "kamu memilih aku 2";
            }else{
                $hasil = "kamu memilih dia 2";
            }
        }else{
            $hasil = "kamu memilih dia";
        }

        return $hasil;
    }

    public function kelima(){
        $nilai = 'ss';
        $keterangan = 'tidak valid!'; // jika tidak memakai default
        switch ($nilai) {
            case 'a':
                $keterangan = 'sangat baik';
                break;
            case 'b':
                $keterangan = 'baik';
                break;
            case 'c':
                $keterangan = 'cukup';
                break; // jika break dihapus maka akan keluar output case (break selanjutnya)
            case 'd':
                $keterangan = 'sangat kurang';
                break;
            // default: // untuk output jika variabel tidak sesuai value,bisa memakai default atau deklarasi sebelum switch
            //     $keterangan = 'nilai tidak valid';
            //     break;
        }
        return $keterangan;
    }
}
