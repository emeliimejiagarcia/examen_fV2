<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class Loan_historyRequest extends FormRequest
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
            'username' => 'required|string|min:10|max:255',
            'equipment_name' => 'required|string|min:5|max:255',
            'type_equipment' => 'required|string|min:5|max:255',
            'loan_date' => 'required|date',
            'input_status' => 'required|string|min:10|max:255',
            'exit_status' => 'required|string|min:10|max:255',
            'condition' => 'required|string|min:20|max:255',
            'loan_code' => ['required', 'string', 'max:255', Rule::unique('loan_history')->ignore($this->loan_history)],
            'description' => 'required|string|min:10|max:255',
            'loan_id' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.string' => 'El nombre de usuario debe tener solo carácteres.',
            'username.min' => 'El nombre de usuario debe tener al menos 10 cáracteres.',
            'username.max' => 'El nombre de usuario tiene un máximo de 255 cáracteres.',

            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'type_equipment.required' => 'El tipo de equipo es obligatorio.',
            'type_equipment.string' => 'El tipo de equipo debe tener solo carácteres.',
            'type_equipment.min' => 'El tipo de equipo debe tener al menos 5 cáracteres.',
            'type_equipment.max' => 'El tipo de equipo tiene un máximo de 255 cáracteres.',

            'loan_date.required' => 'La fecha de préstamo es obligatoria.',
            'loan_date.date' => 'La fecha de préstamo debe ser una fecha válida.',

            'input_status.required' => 'El estado de entrada es obligatorio.',
            'input_status.string' => 'El estado de entrada debe tener solo carácteres.',
            'input_status.min' => 'El estado de entrada debe tener al menos 10 cáracteres.',
            'input_status.max' => 'El estado de entrada tiene un máximo de 255 cáracteres.',

            'exit_status.required' => 'El estado de salida es obligatorio.',
            'exit_status.string' => 'El estado de salida debe tener solo carácteres.',
            'exit_status.min' => 'El estado de salida debe tener al menos 10 cáracteres.',
            'exit_status.max' => 'El estado de salida tiene un máximo de 255 cáracteres.',

            'condition.required' => 'La condición del equipo es obligatoria.',
            'condition.string' => 'La condición del equipo debe tener solo carácteres.',
            'condition.min' => 'La condición del equipo debe tener al menos 20 cáracteres.',
            'condition.max' => 'La condición del equipo tiene un máximo de 255 cáracteres.',

            'loan_code.required' => 'El código de préstamo es obligatorio.',
            'loan_code.string' => 'El código de préstamo debe tener solo carácteres.',
            'loan_code.max' => 'El código de préstamo tiene un máximo de 255 cáracteres.',
            'loan_code.unique' => 'El código de préstamo ya está en uso.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe tener solo carácteres.',
            'description.min' => 'La descripción debe tener al menos 10 cáracteres.',
            'description.max' => 'La descripción tiene un máximo de 255 cáracteres.',

            'loan_id.required' => 'La información del préstamo es requerido.',


        ];
    }
}
