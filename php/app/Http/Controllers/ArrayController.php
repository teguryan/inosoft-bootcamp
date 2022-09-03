<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function pertama(){
        $makanan_favorit = ['ayam','pecel','gado-gado'];

        return $makanan_favorit[1]; // error jika outpun <= 2 karena isi array hanya 0,1,2
    }

    public function kedua(){
        $makanan_favorit = [
            'satu' => 'ayam',
            2 => 'pecel',
            3.1 => 'gado-gado',
            'somay' => 'lain-lain'];

        return $makanan_favorit['somay']; // index tidak berpatok pada integer
    }
}
