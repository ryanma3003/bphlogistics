<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class GaleriRequest extends FormRequest
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
            'gambar' => 'sometimes|image|max:800|mimes:jpeg,JPEG,jpg,JPG,bmp,BMP,png,PNG',
            'filter_id' => 'required',
        ];
    }
}
