<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviePost extends FormRequest
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
            'title' => 'required|min:3',
            'director' => 'required',
            'year' => 'required|numeric|min:1900'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio',
        ];
    }
}
