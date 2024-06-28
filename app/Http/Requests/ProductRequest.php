<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sku'     => 'required',
            'nama_produk'      => 'required',
            'desc_produk'      => 'required',
            'harga'      => 'required',
            'jml_produk'      => 'required',
            'img_produk'       => 'required|image|file|mimes:png,jpg,jpeg,webp,jfif|max:2024',
        ];
    }
}
