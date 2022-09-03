<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function pertama(){
        $jumlah = 0;
        while ($jumlah < 3) {
            $this->yo(); //yo bro! 3x
            $jumlah++;
        }
    }

    public function yo(){
        echo "yo bro! <br>";
    }

    public function kedua(){
        $this->printHello('ryan',1);
    }

    public function printHello(string $nama,int $angka){
        echo "haloo ".$nama." kamu urutan ke ".$angka.'<br>';
    }

    public function ketiga(){
        $this->makan(false); //jika dkasih parameter maka akan menambal yang ada 
    }

    public function makan(bool $lapar = true){ //jika default parameter tidak diisi dan function yang dipanggil tidak diisi                                                
        if($lapar){                      //maka output error  too few argument
            echo 'makan lah kalau lapar';
        }else{
            echo 'udah kenyang gitu';
        }
    }

    public function keempat(){
        $total = $this->menjumlah(1,2);
        echo $total;
    }

    public function menjumlah(int $angka1,int $angka2){
        // $hasil = $angka1 + $angka2;
        // return $hasil;
        //atau bisa lansung
        return $angka1 + $angka2;
    }

    public function kelima(){
        $hasil = $this->pembagian(30,5);
        echo $hasil;
    }
   
    public function pembagian(int $angka1,int $angka2){
        $jika0 = $this->pengecekanNol($angka2);
        if($jika0){
            return "angka kedua tidak bole 0";
        }
        return $angka1 / $angka2;
    }

    public function pengecekanNol(int $angka){
        if($angka == 0){
            return true;
        }
    }

    public function keenam(int $angka = 5){ //fungsi rekursif menghitung faktorial 5!
        $hasilFaktorial = $this->kalikan($angka);
        echo "hasil dari ".$angka."! adalah ".$hasilFaktorial;
    }

    public function kalikan(int $n){
        // if ($n >= 1) return $n * $this->kalikan($n-1);
        // else return 1;
        //atau
        if ($n == 1) return 1;
        else return $n * $this->kalikan($n-1);
    }
}
