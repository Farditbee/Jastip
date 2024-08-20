<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'thumbabout1' => ['required', 'image', 'max:4096', 'mimes:png,jpg,svg'],
            'thumbabout2' => ['image', 'max:4096', 'mimes:png,jpg,svg'],
            'thumbabout3' => ['image', 'max:4096', 'mimes:png,jpg,svg'],
            'thumbabout4' => ['image', 'max:4096', 'mimes:png,jpg,svg'],
            'slugabout' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'thumbabout1.required' => 'Gambar 1 harus diisi',
            'thumbabout1.image' => 'Gambar 1 harus berupa gambar',
            'thumbabout1.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout1.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout2.required' => 'Gambar 2 harus diisi',
            'thumbabout2.image' => 'Gambar 2 harus berupa gambar',
            'thumbabout2.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout2.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout3.required' => 'Gambar 3 harus diisi',
            'thumbabout3.image' => 'Gambar 3 harus berupa gambar',
            'thumbabout3.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout3.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'thumbabout4.required' => 'Gambar 4 harus diisi',
            'thumbabout4.image' => 'Gambar 4 harus berupa gambar',
            'thumbabout4.max' => 'Ukuran gambar maksimal 4MB',
            'thumbabout4.mimes' => 'Gambar harus format JPG,PNG atau SVG',
            'slugabout.required' => 'Tentang Hotel harus diisi',
            'slugabout.string' => 'Tentang Hotel harus berupa string',
        ];
    }
}
