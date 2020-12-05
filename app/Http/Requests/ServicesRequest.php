<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'icone' => 'required_without:id|mimes:png',
            'description' => 'required|min:10',
        ];
    }
     public function messages(){
         return [
            'required'     => 'Ce champ est obligatoire',
            'name.max'     => 'Le nom ne peut pas étre plus de 255 caractére',
            'icone.mimes'     => 'le format de l\'icone doit étre png',
            'description.min'     => 'Le message ne peut pas contenir moins de 10 caractére',  
        ];
    }
}
