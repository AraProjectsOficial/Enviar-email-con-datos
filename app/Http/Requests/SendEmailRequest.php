<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'identifier' => 'required',
            'area' => 'required',
            'subject' => 'required',
            'issue' => 'required',
            'images' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'identifier.required' => 'El número identificador unico del empleado es solicitado',
            'area.required' => 'El área del empleado es solicitada',
            'subject.required' => 'El tema del correo electrónico es requerido',
            'issue.required' => 'El asunto del correo electrónico es requerido',
            'images.required' => 'Imagenes de referencia son requeridas'
        ];
    }
}
