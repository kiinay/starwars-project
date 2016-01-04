<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreProductRequest extends Request
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
    public function rules() {
        return [
            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Veuillez entrer un titre pour votre produit.',
            'abstract.required' => 'Veuillez saisir une courte description pour votre produit.',
            'content.required' => 'Veuillez saisir une description de votre produit',
            'image.required' => 'Veuillez sélectionner une image pour votre produit',
            'image.image' => 'Ce fichier n\'est pas une image ou n\'est pas dans le bon format (JPEG, PNG, BMP, GIF ou SVG).',
        ];
    }
}
