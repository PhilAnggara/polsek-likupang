<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KendaraanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'merk_kendaraan' => 'required|max:255',
            'no_polisi' => 'required|max:255',
            'warna' => 'required|max:255',
            'jenis' => 'required|max:255',
            'penanggung_jawab' => 'required|max:255',
            'no_telp' => 'required|max:255'
        ];
    }
}
