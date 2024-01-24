<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titolo' => 'required|min:5|max:25',
            'contenuto' => 'nullable|max:250',
            'slug' => 'nullable',
        ];
    }

    public function messages() {
        return[
            'titolo.required' => 'Inserire un titolo per il post',
            'titolo.min' => 'Il titolo inserito è troppo piccolo',
            'titolo.max' => 'Il titolo inserito è troppo grande',
            'contenuto.max' => 'Il contenuto inserito è troppo grande',
        ];
    }
}
