<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class Blog_postRequest extends FormRequest
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
            'title' => 'required|string',
            'title' => array('Regex:/^[A-Za-z0-9 ]+$/'),
            'description' => 'required|string',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'sometimes|image|max:800|mimes:jpeg,JPEG,jpg,JPG,bmp,BMP,png,PNG',
        ];
    }
}
