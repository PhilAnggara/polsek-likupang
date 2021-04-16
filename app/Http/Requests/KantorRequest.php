<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KantorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_aset' => 'required|max:255',
            'jenis' => 'required|max:255',
            'pemakai' => 'required|max:255'
        ];
    }
}
