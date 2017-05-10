<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
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
            'placa' => ['required', 'max:6'],
        ];
    }

    public function messages(){
        return [
          'placa.required' => 'Por favor, escribe la placa',
          'placa.max' => 'Escribe una placa valida',
        ];
    }
}
