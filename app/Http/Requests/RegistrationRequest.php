<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'username' => 'required|string|min:5|max:255',
            'current_condition' => 'required|string|max:255',
            'last_update' => 'required|datetime',
            'date_time' => 'required|datetime',
            'loan_date' => 'required|date',
            'return_date' => 'required|date',
            'loan_duration' => 'required|string|min:6',
            'user_type' => 'required|string|min:5|max:255',
            'equipment_name' => 'required|string|min:5|max:255',
            'equipment_number' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'condition_loan' => 'required|string|min:20|max:255',
            'vendor_id' => 'required',
            'loans_id' => 'required',
            'technological_equipment_id' => 'required',
            'type_equipment_id' => 'required'];
    }

    public function messages()
    {
        return[
            'username' => 'El nombre de usuario es obligatorio.',
            'username.string' => 'El nombre de usuario debe tener solo carácteres.',
            'username.min' => 'El nombre de usuario debe tener al menos 5 cáracteres.',
            'username.max' => 'El nombre de usuario tiene un máximo de 255 cáracteres.',

            'current_condition.required' => 'La condición actual es obligatoria.',
            'current_condition.string' => 'La condición actual debe tener solo carácteres.',
            'current_condition.max' => 'La condición actual tiene un máximo de 255 cáracteres.',

            'last_update.required' => 'La última actualización es obligatoria.',
            'last_update.datetime' => 'La última actualización debe ser una fecha y hora válida.',

            'date_time.required' => 'La fecha y hora son obligatorias.',
            'date_time.datetime' => 'La fecha y hora deben ser válidas.',

            'loan_date.required' => 'La fecha del préstamo es obligatoria.',
            'loan_date.date' => 'La fecha del préstamo debe ser una fecha válida.',

            'return_date.required' => 'La fecha de devolución es obligatoria.',
            'return_date.date' => 'La fecha de devolución debe ser una fecha válida.',

            'loan_duration.required' => 'La duración del préstamo es obligatoria.',
            'loan_duration.string' => 'La duración del préstamo debe tener solo carácteres.',
            'loan_duration.min' => 'La duración del préstamo debe tener al menos 6 cáracteres.',

            'user_type.required' => 'El tipo de usuario es obligatorio.',
            'user_type.string' => 'El tipo de usuario debe tener solo carácteres.',
            'user_type.min' => 'El tipo de usuario debe tener al menos 5 cáracteres.',
            'user_type.max' => 'El tipo de usuario tiene un máximo de 255 cáracteres.',


            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'equipment_number.required' => 'El número del equipo es obligatorio.',
            'equipment_number.string' => 'El número del equipo debe tener solo carácteres.',
            'equipment_number.max' => 'El número del equipo tiene un máximo de 255 cáracteres.',

            'serial_number.required' => 'El número de serie es obligatorio.',
            'serial_number.string' => 'El número de serie debe tener solo carácteres.',
            'serial_number.max' => 'El número de serie tiene un máximo de 255 cáracteres.',

            'condition_loan.required' => 'La condición del préstamo es obligatoria.',
            'condition_loan.string' => 'La condición del préstamo debe tener solo carácteres.',
            'condition_loan.min' => 'La condición del préstamo debe tener al menos 20 cáracteres.',
            'condition_loan.max' => 'La condición del préstamo tiene un máximo de 255 cáracteres.',

            'responsible.required' => 'El responsable es obligatorio.',
            'responsible.string' => 'El responsable debe tener solo carácteres.',
            'responsible.min' => 'El responsable debe tener al menos 5 cáracteres.',
            'responsible.max' => 'El responsable tiene un máximo de 255 cáracteres.',

            'vendor_id.required' => 'El nombre del proveedor es obligatorio.',

            'loans_id.required' => 'La información del préstamo es requerido.',

            'technological_equipment_id.required' => 'El nombre del equipo tecnológico es requerido.',

            'type_equipment_id.required' => 'El tipo de equipo es requerido.',


        ];
    }

}
