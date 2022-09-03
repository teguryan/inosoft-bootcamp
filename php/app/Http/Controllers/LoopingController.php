<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopingController extends Controller
{
    public function pertama(){
        $total = 5;
        $hasilFaktorial = 1;

        //1
        // for ($i=1; $i<=$total ; $i++) { 
        //     $hasilFaktorial = $hasilFaktorial * $i;
        // }
        // return $hasilFaktorial; //faktorial 5! di program = 1 * 2 * 3 * 4 * 5 

        //2
        for ($i=$total; $i>=1 ; $i--) {
            echo $i.PHP_EOL; 
            $hasilFaktorial *= $i;
        }
        return $hasilFaktorial; //faktorial 5! di program sama seperti seharusnya = 5 * 4 * 3 * 2 * 1
    }

    public function kedua(){
        $pizza = "piece1 piece2 piece3 piece4 piece5";
        $pieces = explode(" ",$pizza);
        for ($i=0; $i < count($pieces); $i++) { 
            echo $pieces[$i].'<br>';
        }
    }

    public function ketiga(){
        $counter = 0;
        while ($counter < 10) {
            echo "saya berjanji tidak akan mengulangi lagi <br>";
            $counter++;
        }
    }

    public function keempat(){
        $faktorial = 5;
        $hasil = 1;
        while ($faktorial > 0) {
            $hasil *= $faktorial;
            $faktorial--; 
        }
        echo $hasil;
    }

    public function kelima(){
        $angka = -2;
        
        // do {
        //     $angka--;
        // } while ($angka > 0);//-3 karena do melakukan terlebih dahulu dicek,ternyata sudah pas maka cuma loop sekali = -3

        while ($angka > 0) {
            $angka--; //-2 tidak ada perubahan karena dicek terlebih dahulu 
        }
        echo $angka; 
    }

    public function keenam(){
        $makananFavo = [
            'adi' => 'ayam',
            'septian' => 'bubur',
            'ade' => 'bebek',
            'syahrial' => 'bakso',
            'syafrial' => 'gado-gado'
        ];

        foreach($makananFavo as $who => $fav){ // as $key => $value
            echo $who.' suka makan'.$fav.'<br>';
        }
    }
}
