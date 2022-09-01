<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function itemForm(){
        return view('itemForm');
    }
    
    function itemPost(Request $request){
        // print_r($request->all()); die;
        
        $data =  [
            'nama_barang' => $request->namaBarang,
            'harga_barang' => $request->hargaBarang,
        ];
        return view('itemPost',$data);
    }
    function index(){
        // echo "hello!";
        // cara 1
            $nama = 'ryan';
            return view('index',['name' => $nama]);
    }

    function indexxx(){
        // cara 2
            $nama = 'ryan';
            $data['name'] =  $nama;
            return view('index',$data);
    }
    
    function indexx(){
        // cara 3
            $namaDepan = 'tegu';
            $namaBelakang = 'ryan';
            $data =  [
                'nama_depan' => $namaDepan,
                'nama_belakang' => $namaBelakang,
            ];
            return view('indexx',$data);
    }

    function index1(){
        $namaBarang = 'sepatu';
        $hargaBarang = '1.000.000';
        $data =  [
            'nama_barang' => $namaBarang,
            'harga_barang' => $hargaBarang,
        ];
        return view('index1',$data);
    }

    function item($namaBarang){
        // echo $namaBarang;
        $data =  [
            'nama_barang' => $namaBarang,
        ];
        return view('item',$data);

    }

}
