<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'img_produk'       => 'nullable|image|file|mimes:png,jpg,jpeg,webp|max:2024',
        ];
    }
}
