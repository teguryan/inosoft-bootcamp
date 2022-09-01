<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required|min:10',
            'deskripsi' => 'required',
            'harga' => 'required',
            'tipe_produk' => 'required',
        ];
    }
}
