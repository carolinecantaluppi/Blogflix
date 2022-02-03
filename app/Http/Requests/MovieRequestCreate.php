<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequestCreate extends FormRequest
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
            'img'=>'required|image',
            'title'=>'required|min:3|max:50',
            'body'=>'required|min:10|max:500',
            'category'=>'required|min:3|max:100',
            'authorname'=>'required|min:3|max:50',
        ];
    }
}
