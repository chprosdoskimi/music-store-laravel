<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtistRequest extends FormRequest
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
            'name' => 'required|min:2|max:255|unique:artists'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo "artista é obrigatório.',
            'name.unique'   => 'Artista já cadastrado.',
            'name.min'      => 'O "artista" deve ter no mínimo 2 caracteres.',
            'name.max'      => 'O "artista" deve ter no máximo 255 caracteres'
        ];
    }
}
