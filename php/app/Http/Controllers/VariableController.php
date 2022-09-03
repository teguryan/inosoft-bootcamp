<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableController extends Controller
{
    public function pertama(){
        $saya = 'tegu';
        $namaSaya = "ryan";
        $AngkaString = "20";
        $variable1 = 10;
        $panjang_persegi = 5.5;
        $satu_tambah1 = 2;
        $_variable = true;
        
        // $hasil = $variable1 +  $panjang_persegi; // 15.5
        // $hasil = $saya + $variable1 ; // A non-numeric value encountered 
        // $hasil = $AngkaString - $variable1; // 10
        // $panjang_persegi = $panjang_persegi + $satu_tambah1; // 7.5
        $panjang_persegi += $satu_tambah1; // 7.5 sama kaya diatas
        return $panjang_persegi;
    }
}
