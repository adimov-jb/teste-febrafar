<?php

namespace App\Http\Requests;

use App\Enums\StatusAgendaEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AgendaRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        $rules = [];

        if (in_array($request->method(), ['POST', 'PUT'])) {
            $rules = [
                'id' => 'id',
                'data_inicio' => [
                    'required',
                    'date_format:Y-m-d'
                ],
                'data_prazo' => [
                    'required',
                    'date_format:Y-m-d'
                ],
                'data_conclusao' => [
                    'required',
                    'date_format:Y-m-d'
                ],
                'titulo' => [
                    'required',
                    'min:3',
                    'max:255'
                ],
                'descricao' => [
                    'required',
                    'min:3',
                    'max:255'
                ],
                'status' => [
                    'required',
                    Rule::in(StatusAgendaEnum::getAll())
                ],
                'agendas_tipos.id' => [
                    'required',
                    'id',
                    'exists:agendas_tipos,id'
                ]
            ];
        }

        return $rules;
    }
}
