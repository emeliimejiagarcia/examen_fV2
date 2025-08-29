<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class Academic_areaRequest extends FormRequest
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
            'area_name' => 'required|string|min:5|max:255',
            'area_code' => ['required', 'string', 'max:255', Rule::unique('academic_areas')->ignore($this->academic_area)],
            'location' => 'required|string|min:5|max:255',
            'equipment_coordinator' => 'required|string|min:5|max:255',
            'area_type' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:10|max:255',
            'equipment_quantity' => 'required|integer|min:1',
            'responsible_id' => 'required',
            'technological_equipment_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'area_name.required' => 'El nombre del área académica es obligatorio.',
            'area_name.string' => 'El nombre del área académica debe tener solo carácteres.',
            'area_name.min' => 'El nombre del área académica debe tener al menos 5 cáracteres.',
            'area_name.max' => 'El nombre del área académica tiene un máximo de 255 cáracteres.',

            'area_code.required' => 'El código del área académica es obligatorio.',
            'area_code.string' => 'El código del área académica debe tener solo carácteres.',
            'area_code.max' => 'El código del área académica tiene un máximo de 255 cáracteres.',
            'area_code.unique' => 'El código del área académica ya está en uso.',

            'location.required' => 'La ubicación es obligatoria.',
            'location.string' => 'La ubicación debe tener solo carácteres.',
            'location.min' => 'La ubicación debe tener al menos 5 cáracteres.',
            'location.max' => 'La ubicación tiene un máximo de 255 cáracteres.',

            'equipment_coordinator.required' => 'El coordinador de equipos es obligatorio.',
            'equipment_coordinator.string' => 'El coordinador de equipos debe tener solo carácteres.',
            'equipment_coordinator.min' => 'El coordinador de equipos debe tener al menos 5 cáracteres.',
            'equipment_coordinator.max' => 'El coordinador de equipos tiene un máximo de 255 cáracteres.',

            'area_type.required' => 'El tipo de área es obligatorio.',
            'area_type.string' => 'El tipo de área debe tener solo carácteres.',
            'area_type.min' => 'El tipo de área debe tener al menos 5 cáracteres.',
            'area_type.max' => 'El tipo de área tiene un máximo de 255 cáracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser un texto.',
            'description.min' => 'La descripción debe tener al menos 10 cáracteres.',
            'description.max' => 'La descripción tiene un máximo de 255 cáracteres.',

            'equipment_quantity.required' => 'La cantidad de equipos es obligatoria.',
            'equipment_quantity.integer' => 'La cantidad de equipos debe ser números.',
            'equipment_quantity.min' => 'La cantidad de equipos debe ser al menos 1.',

            'responsible_id.required' => 'El nombre del responsable es obligatorio.',

            'technological_equipment_id.required' => 'El nombre del equipo tecnológico es obligatorio.',
        ];
    }
}
