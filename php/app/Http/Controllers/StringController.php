<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringController extends Controller
{
    public function pertama(){
        // echo strlen("hello world!"); //12
        // echo str_replace('pagi','siang','selamat pagi');//selamat siang 
        // jika parameter ketiga tidak sesuai parameter pertama maka tidak ada perubahan
        // echo str_word_count('kucing tidak bisa terbang');//4
        // echo strpos("selamat siang bubos!","bubos");//14

        // $var1 = "yo!";
        // $var2 = "Yo!";
        //1 no sensitive case
        // if(strcmp($var1,$var2) !== 0){ 
        //     echo '$var1 is not equal to $var2 in a case sensitive string comparison <br>';
        //     echo "$var1 is not equal to $var2 in a case sensitive string comparison";
        //     //baru sadar,kalau pakai '' $var1/$var2 terbaca $var1/$var2,jika memakai "" maka terbaca 'yo!' dan 'Yo!'
        // }
        //2 sensitive case
        // if(strnatcasecmp($var1,$var2) !== 0){ 
        //     echo '$var1 is not equal to $var2 in a case sensitive string comparison <br>';
        // }else{
        //     echo 'equal';
        // }

        $pizza = "piece1 piece2 piece3 piece4 piece5";
        $pieces = explode(" ",$pizza);
        // var_dump($pieces);
        // echo $pieces[1];
        // echo $pieces[4];
        $gabung = implode(',',$pieces);
        var_dump($gabung);
    }
}
