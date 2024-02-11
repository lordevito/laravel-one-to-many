<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:50|unique:projects,title',
            'description' => 'string|nullable',
            'languages' => 'required|max:70',
            'frameworks' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titolo del progetto richiesto',
            'title.max' => 'Numero massimo caratteri: :max',
            'description.string' => 'La descrizione deve essere una stringa',
            'languages.required' => 'Linguaggi utilizzati richiesti',
            'languages.max' => 'Numero massimo caratteri: :max',
            'frameworks.required' => 'Frameworks utilizzati richiesti',
            'frameworks.max' => 'Numero massimo caratteri: :max',
            'title.unique' => 'Il titolo è già presente nel database'
        ];
    }
}
