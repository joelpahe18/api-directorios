<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class DirectorioRequest extends FormRequest
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
            'NombreServicio'    =>  'required|string|unique:directorio_servicios',
            'TipoServicio'      =>  'required|alpha',
            'ServicioDomicilio' =>  'required|boolean',
            'HorarioAtencion'   =>  'string',
            'PaginaWeb'         =>  'url',
            'CorreoElectronico' =>  'email:rfc|confirmed',
            // 'CorreoElectronico' =>  'email:rfc|unique:directorio_servicios|confirmed',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'NombreServicio.required'       => 'El nombre del servicio es requerido.',
            'NombreServicio.string'         => 'El nombre del servicio debe contener solo letras.',
            'TipoServicio.required'         => 'El tipo de servicio es requerido.',
            'TipoServicio.alpha'            => 'El tipo de servicio debe contener solo letras.',
            'ServicioDomicilio.required'    => 'El servicio a domicilio es requerido.',
            'ServicioDomicilio.boolean'     => 'El servicio a domicilio debe ser true o false.',
            'HorarioAtencion.required'      => 'El horario de atención es requerido.',
            'PaginaWeb.url'                 => 'Página web no válida.',
            'CorreoElectronico.email'       => 'Correo electronico no válido.'
        ];
    }
}