<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaRequest extends FormRequest
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
            'nome' => 'required|min: 5| max: 100', 'registro' => 'required', 'diagnostico_inicial' => 'required|min:10',
            'data_admissao' => 'required', 'sexo' => 'required', 'idade' => 'required', 'leito' => 'required',
            'condicao_risco' => 'required', 'terminologia' => 'required', 'data' => 'required', 'inicio' => 'required',
            'fim' => 'required', 'ducacao' => 'required', 'classificacao' => 'required', 'emergencia' => 'required',
            'tricotomia' => 'required', 'transfusao_sanguinea' => 'required', 'cirurgiao' => 'required',
            'instrumentador' => 'required', 'anestesista' => 'required', 'auxiliar_cirurgia' => 'required',
            'cirtulantes' => 'required', 'anestesia' => 'required', 'antimicrobiano' => 'required', 'motivo' => 'required'
        ];
    }
}
