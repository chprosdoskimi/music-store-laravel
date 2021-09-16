<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAlbumRequest extends FormRequest
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
            'album' => 'required',
            'year' => 'required|numeric|min:1500',
            'price' => 'required|',
            'artist' => 'required',
            'genre' => 'required',
            // 'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'

        ];
    }

    public function messages()
    {
        return [
            'album.required' => 'O campo "álbum" é obrigatório.',
            'year.required' => 'O campo "ano" é obrigatório.',
            'price.required' => 'O campo "preço" precisa de um valor.',
            'artist.required' => 'O campo "artista" é obrigatório.',
            'genre.required' => 'O campo "gênero" é obrigatório.',
            // 'image.required' => 'Insira uma foto para a capa do Álbum.',
            'image.mimes' => 'Formato incompatível de imagem.',
            'year.numeric' => 'O "ano" deve ser número.',
            'year.min' => 'O "ano" deve ser no mínimo 1500'
        ];
    }
}
