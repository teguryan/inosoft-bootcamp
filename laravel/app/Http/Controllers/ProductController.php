<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProduct = Product::all();
        // dump($allProduct->toArray());
        return view('product',['product' => $allProduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        
        // $formData = $request->all();
        // dump($formData);

        //  $newProduct = [
        //     'nama_produk' => 'Sepatu Neck',
        //     'deskripsi' => 'Neck The Best',
        //     'harga' => 100000,
        //     'tipe_produk' => 'Sepatu'
        // ];

        // $product = Product::make($newProduct);
        // $product->save();

        //cara 1 makai  request bawaan laravel
        // $formData = $request->validate([
        //     'nama_produk' => 'required|min:10',
        //     'deskripsi' => 'required',
        //     'harga' => 'required',
        //     'tipe_produk' => 'required',
        // ]);
        // dump($formData);

        //cara 2 menggunakan request sendiri (make:request) menggnati Request di public function
        // menjadi sesuai yang nama request buatan (ProductStoreRequest $request)
        $formData = $request->validated();
        dump($formData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
