<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class Technological_equipmentRequest extends FormRequest
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
            'mark'=> 'required|string|min:2|max:255',
            'equipment_name'=> 'required|string|min:5|max:255',
            'serial_number'=> ['required','string', 'max:255', Rule::unique('technological_equipments')->ignore($this->technological_equipment)],
            'condition'=> 'required|string|min:5|max:255',
            'location'=> 'required|string|min:5|max:255',
            'entry_date'=> 'required|date',
            'brand'=> 'required|string|min:5|max:255',
            'acquisition_date'=> 'required|date',
            'availability'=> 'required|string|min:1|max:255',
            'inventory_code'=> ['required','string', 'max:255', Rule::unique('technological_equipments')->ignore($this->technological_equipment)],
            'technology_category'=> 'required|string|min:10',
            'vendor_id'=> 'required'
        ];

    }

    public function messages()
    {
        return[
            'mark.required' => 'La marca es obligatoria.',
            'mark.string' => 'La marca debe tener solo carácteres.',
            'mark.min' => 'La marca debe tener al menos 2 cáracteres.',
            'mark.max' => 'La marca tiene un máximo de 255 cáracteres.',

            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'serial_number.required' => 'El número de serie es obligatorio.',
            'serial_number.string' => 'El número de serie debe tener solo carácteres.',
            'serial_number.max' => 'El número de serie tiene un máximo de 255 cáracteres.',
            'serial_number.unique' => 'El número de serie ya está en uso.',

            'condition.required' => 'La condición es obligatoria.',
            'condition.string' => 'La condición debe tener solo carácteres.',
            'condition.min' => 'La condición debe tener al menos 5 cáracteres.',
            'condition.max' => 'La condición tiene un máximo de 255 cáracteres.',

            'location.required' => 'La ubicación es obligatoria.',
            'location.string' => 'La ubicación debe tener solo carácteres.',
            'location.min' => 'La ubicación debe tener al menos 5 cáracteres.',
            'location.max' => 'La ubicación tiene un máximo de 255 cáracteres.',

            'entry_date.required' => 'La fecha de entrada es obligatoria.',
            'entry_date.date' => 'La fecha de entrada debe ser una fecha válida.',



            'brand.required' => 'La marca es obligatoria.',
            'brand.string' => 'La marca debe tener solo carácteres.',
            'brand.min' => 'La marca debe tener al menos 5 cáracteres.',
            'brand.max' => 'La marca tiene un máximo de 255 cáracteres.',

            'acquisition_date.required' => 'La fecha de adquisición es obligatoria.',
            'acquisition_date.date' => 'La fecha de adquisición debe ser una fecha válida.',

            'availability.required' => 'La disponibilidad del equipo es obligatoria.',
            'availability.string' => 'La disponibilidad del equipo debe tener solo carácteres.',
            'availability.min' => 'La disponibilidad del equipo debe tener al menos 1 equipo disponible.',
            'availability.max' => 'La disponibilidad del equipo tiene un máximo de 255 cáracteres.',

            'inventory_code.required' => 'El código de inventario es obligatorio.',
            'inventory_code.string' => 'El código de inventario debe tener solo carácteres.',
            'inventory_code.max' => 'El código de inventario tiene un máximo de 255 cáracteres.',
            'inventory_code.unique' => 'El código de inventario ya existe.',

            'technology_category.required' => 'La categoría tecnológica es obligatoria.',
            'technology_category.string' => 'La categoría tecnológica debe tener solo carácteres.',
            'technology_category.min' => 'La categoría tecnológica debe tener al menos 10 cáracteres.',

            'vendor_id.required' => 'El nombre del proveedor es obligatorio.',
        ];
    }
}
