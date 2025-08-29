<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Maintenance_reportRequest extends FormRequest
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
            'report_date' => 'required|date',
            'description' => 'required|string|min:10|max:255',
            'action' => 'required|string|min:10|max:255',
            'equipment_condition' => 'required|string|min:4|max:255',
            'equipment_name' => 'required|string|min:5|max:255',
            'maintenance_date' => 'required|date',
            'maintenance_type' => 'required|string|min:5|max:255',
            'technician_name' => 'required|string|min:5|max:255',
            'maintenance_cost' => 'required',
            'report_status' => 'required|string|min:4|max:255',
            'responsible_id' => 'required',
            'technological_equipment_id' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'report_date.required' => 'La fecha del reporte es obligatoria.',
            'report_date.date' => 'La fecha del reporte debe ser una fecha válida.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe tener solo carácteres.',
            'description.min' => 'La descripción debe tener al menos 10 cáracteres.',
            'description.max' => 'La descripción tiene un máximo de 255 cáracteres.',

            'action.required' => 'La acción de mantenimiento es obligatoria.',
            'action.string' => 'La acción de mantenimiento debe tener solo carácteres.',
            'action.min' => 'La acción de mantenimiento debe tener al menos 10 cáracteres.',
            'action.max' => 'La acción de mantenimiento tiene un máximo de 255 cáracteres.',

            'equipment_condition.required' => 'La condición del equipo es obligatoria.',
            'equipment_condition.string' => 'La condición del equipo debe tener solo carácteres.',
            'equipment_condition.min' => 'La condición del equipo debe tener al menos 4 cáracteres.',
            'equipment_condition.max' => 'La condición del equipo tiene un máximo de 255 cáracteres.',

            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'maintenance_date.required' => 'La fecha de mantenimiento es obligatoria.',
            'maintenance_date.date' => 'La fecha de mantenimiento debe ser una fecha válida.',

            'maintenance_type.required' => 'Especificar el  tipo de mantenimiento es requerido.',
            'maintenance_type.string' => 'El tipo de mantenimiento debe tener solo carácteres.',
            'maintenance_type.min' => 'El tipo de mantenimiento debe tener al menos 5 cáracteres.',
            'maintenance_type.max' => 'El tipo de mantenimiento tiene un máximo de 255 cáracteres.',

            'technician_name.required' => 'El nombre del técnico  es obligatorio.',
            'technician_name.string' => 'El nombre del técnico debe tener solo carácteres.',
            'technician_name.min' => 'El nombre del técnico debe tener al menos 5 cáracteres.',
            'technician_name.max' => 'El nombre del técnico tiene un máximo de 255 cáracteres.',

            'maintenance_cost.required' => 'El costo de mantenimiento es requerido.',
            'maintenance_cost.decimal' => 'El costo de mantenimiento debe ser un número decimal válido.',
            'maintenance_cost.min' => 'El costo de mantenimiento no puede ser negativo.',

            'report_status.required' => 'El reporte del estado del equipo tecnológico es requerido.',
            'report_status.string' => 'El reporte del estado del equipo tecnológico debe tener solo carácteres.',
            'report_status.min' => 'El estado del reporte debe tener al menos 5 cáracteres.',
            'report_status.max' => 'El estado del reporte tiene un máximo de 255 cáracteres.',

            'responsible_id.required' => 'El nombre del responsable es obligatorio.',

            'technological_equipment_id.required' => 'El nombre del equipo tecnológico es requerido.',






        ];
    }

}
