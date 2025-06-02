<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'nombre' => ['required', 'max:100'],
            'descripcion' => ['required','max:300'],
            'provincia_id' => ['required','integer', 'exists:provincias,id'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'max' => 'El campo :attribute no puede tener mas de :max caracteres',
            'exists' => 'El campo : attribute no existe en la base de datos.',
            'integer' => 'El campo : attribute debe ser de número entero.',
            ];
    }
}
