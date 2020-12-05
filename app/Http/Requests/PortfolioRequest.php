<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'project_name' => 'required',
            //'lien' => 'required|mimes:url',
            'image_principale' => 'required_without:id|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire',
           // 'lien.mimes' => 'donner un lien valide svp',
            'image_principale.mimes' => 'donner une format valide jpg, jpeg ou png',
        ];
    }
}
