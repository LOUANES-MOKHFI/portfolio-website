<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category'  => 'required|min:1',
            'prix'  => 'required',
            'duree'  => 'required',
            'description'  => 'min:10',
            'image_principale' => 'required_without:id|mimes:jpg,jpeg,png',


        ];
    }

     public function messages(){
         return [
            'required'     => 'Ce champ est obligatoire',
            'description.min' => 'le description ne peut pas etre moins de 10 caractére',
            'image_principale.mimes' => 'donner une format valide jpg, jpeg ou png',

        ];
    }
}
