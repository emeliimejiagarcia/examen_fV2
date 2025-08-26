<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class Type_equipmentRequest extends FormRequest
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
            'equipment_name'=> 'required|string|min:5|max:255',
            'description'=> 'required|text|min:10|max:255',
            'category'=> 'required|string|min:5|max:255',
            'loan_time'=> 'required|date|max:30',
            'worth'=> 'required|decimal|min:2',
            'power_consumption'=> 'required|decimal|min:5|max:255',
            'technology_category'=> 'required|string|min:5|max:255',
            'code'=> ['required', 'string', 'max:255', Rule::unique('type_equipments')->ignore($this->type_equipment)],
            'type_status'=> 'required|string|max:255',
            'creation_date'=> 'required|date',
            'technological_equipment_id'=> 'required'
        ];
    }

    public function messages()
    {
        return[
            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.text' => 'La descripción debe ser un texto válido.',
            'description.min' => 'La descripción debe tener al menos 10 cáracteres.',
            'description.max' => 'La descripción tiene un máximo de 255 cáracteres.',

            'category.required' => 'La categoría es obligatoria.',
            'category.string' => 'La categoría debe tener solo carácteres.',
            'category.min' => 'La categoría debe tener al menos 5 cáracteres.',
            'category.max' => 'La categoría tiene un máximo de 255 cáracteres.',

            'loan_time.required' => 'El tiempo de préstamo es obligatorio.',
            'loan_time.date' => 'El tiempo de préstamo debe ser una fecha válida.',
            'loan_time.max' => 'El tiempo de préstamo no puede exceder los 30 cáracteres.',

            'worth.required' => 'El valor del equipo es obligatorio.',
            'worth.decimal' => 'El valor del equipo debe ser un número decimal.',
            'worth.min' => 'El valor del equipo debe ser al menos 2 cáracteres.',

            'power_consumption.required' => 'El consumo de energía es obligatorio.',
            'power_consumption.decimal' => 'El consumo de energía debe ser un número decimal.',
            'power_consumption.min' => 'El consumo de energía debe tener al menos 5 cáracteres.',
            'power_consumption.max' => 'El consumo de energía tiene un máximo de 255 cáracteres.',

            'technology_category.required' => 'La categoría tecnológica es obligatoria.',
            'technology_category.string' => 'La categoría tecnológica debe tener solo carácteres.',
            'technology_category.min' => 'La categoría tecnológica debe tener al menos 5 cáracteres.',
            'technology_category.max' => 'La categoría tecnológica tiene un máximo de 255 cáracteres.',

            'code.required' => 'El código es obligatorio.',
            'code.string' => 'El código debe tener solo carácteres.',
            'code.max' => 'El código tiene un máximo de 255 cáracteres.',
            'code.unique' => 'El código ya está en uso.',

            'type_status.required' => 'El estado del tipo de equipo es obligatorio.',
            'type_status.string' => 'El estado del tipo de equipo debe tener solo carácteres.',
            'type_status.max' => 'El estado del tipo de equipo tiene un máximo de 255 cáracteres.',

            'creation_date.required' => 'La fecha de creación es obligatoria.',
            'creation_date.date' => 'La fecha de creación debe ser una fecha válida.',

            'technological_equipment_id.required' => 'El nombre del equipo tecnológico es obligatorio.',
    ];
    }


}
