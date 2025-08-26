<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LoansRequest extends FormRequest
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
            'departure_date'=> 'required|date',
            'expected_date'=> 'required|date',
            'delivery_date'=> 'required|date',
            'delivery_observation'=> 'required|string|min:10|max:255',
            'return_observation'=> 'required|string|min:10|max:255',
            'loan_date' => 'required|date',
            'loan_duration'=> 'required|min:30',
            'username'=> 'required|string|max:255',
            'user_type'=> 'required|string|min:5|max:255',
            'area'=> 'required|string|min:5|max:255',
            'academic_role'=> 'required|string|min:5|max:30',
            'contact_phone' => ['required', 'string', 'max:15', Rule::unique('loans')->ignore($this->loans)],
            'user_address'=> 'required|string|max:255',
            'equipment_name'=> 'required|string|min:5|max:255',
            'equipment_type'=> 'required|string|min:5|max:255',
            'brand'=> 'required|string|min:5|max:255',
            'model' => 'required|string|min:5|max:255',
            'condition_loan'=> 'required|string|min:20|max:255',
            'responsible_id'=> 'required',
            'technological_equipment_id'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'departure_date.required' => 'La fecha de salida es obligatoria.',
            'departure_date.date' => 'La fecha de salida debe ser una fecha válida.',

            'expected_date.required' => 'La fecha esperada es obligatoria.',
            'expected_date.date' => 'La fecha esperada debe ser una fecha válida.',

            'delivery_date.required' => 'La fecha de entrega es obligatoria.',
            'delivery_date.date' => 'La fecha de entrega debe ser una fecha válida.',

            'delivery_observation.required' => 'La observación de entrega es obligatoria.',
            'delivery_observation.string' => 'La observación de entrega debe tener solo carácteres.',
            'delivery_observation.min' => 'La observación de entrega debe tener al menos 10 cáracteres.',
            'delivery_observation.max' => 'La observación de entrega tiene un máximo de 255 cáracteres.',

            'return_observation.required' => 'La observación de devolución es obligatoria.',
            'return_observation.string' => 'La observación de devolución debe tener solo carácteres.',
            'return_observation.min' => 'La observación de devolución debe tener al menos 10 cáracteres.',
            'return_observation.max' => 'La observación de devolución tiene un máximo de 255 cáracteres.',

            'loan_date.required' => 'La fecha de préstamo es obligatoria.',
            'loan_date.date' => 'La fecha de préstamo debe ser una fecha válida.',

            'loan_duration.required' => 'La duración del préstamo es obligatoria.',
            'loan_duration.min' => 'La duración del préstamo debe ser al menos 30 cáracteres.',

            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.string' => 'El nombre de usuario debe tener solo carácteres.',
            'username.max' => 'El nombre de usuario tiene un máximo de 255 cáracteres.',

            'user_type.required' => 'El tipo de usuario es obligatorio.',
            'user_type.string' => 'El tipo de usuario debe tener solo carácteres.',
            'user_type.min' => 'El tipo de usuario debe tener al menos 5 cáracteres.',
            'user_type.max' => 'El tipo de usuario tiene un máximo de 255 cáracteres.',

            'area.required' => 'El nombre del área es obligatoria.',
            'area.string' => 'El nombre del área debe tener solo carácteres.',
            'area.min' => 'El nombre del área debe tener al menos 5 cáracteres.',
            'area.max' => 'El nombre del área tiene un máximo de 255 cáracteres.',

            'academic_role.required' => 'El rol académico es obligatorio.',
            'academic_role.string' => 'El rol académico debe tener solo carácteres.',
            'academic_role.min' => 'El rol académico debe tener al menos 5 cáracteres.',
            'academic_role.max' => 'El rol académico tiene un máximo de 30 cáracteres.',

            'contact_phone.required' => 'El número de teléfono es obligatorio.',
            'contact_phone.string' => 'El número de teléfono debe tener solo carácteres.',
            'contact_phone.max' => 'El número de teléfono tiene un máximo de 15 cáracteres.',
            'contact_phone.unique' => 'El número de teléfono ya existe.',

            'user_address.required' => 'La dirección del usuario es obligatoria.',
            'user_address.string' => 'La dirección del usuario debe tener solo carácteres.',
            'user_address.max' => 'La dirección del usuario tiene un máximo de 255 cáracteres.',

            'equipment_name.required' => 'El nombre del equipo es obligatorio.',
            'equipment_name.string' => 'El nombre del equipo debe tener solo carácteres.',
            'equipment_name.min' => 'El nombre del equipo debe tener al menos 5 cáracteres.',
            'equipment_name.max' => 'El nombre del equipo tiene un máximo de 255 cáracteres.',

            'equipment_type.required' => 'El tipo de equipo es obligatorio.',
            'equipment_type.string' => 'El tipo de equipo debe tener solo carácteres.',
            'equipment_type.min' => 'El tipo de equipo debe tener al menos 5 cáracteres.',
            'equipment_type.max' => 'El tipo de equipo tiene un máximo de 255 cáracteres.',

            'brand.required' => 'La marca es obligatoria.',
            'brand.string' => 'La marca debe tener solo carácteres.',
            'brand.min' => 'La marca debe tener al menos 5 cáracteres.',
            'brand.max' => 'La marca tiene un máximo de 255 cáracteres.',

            'model.required' => 'El modelo es obligatorio.',
            'model.string' => 'El modelo debe tener solo carácteres.',
            'model.min' => 'El modelo debe tener al menos 5 cáracteres.',
            'model.max' => 'El modelo tiene un máximo de 255 cáracteres.',

            'condition_loan.required' => 'La condición del préstamo es obligatoria.',
            'condition_loan.string' => 'La condición del préstamo debe tener solo carácteres.',
            'condition_loan.min' => 'La condición del préstamo debe tener al menos 20 cáracteres.',
            'condition_loan.max' => 'La condición del préstamo tiene un máximo de 255 cáracteres.',

            'responsible_id.required' => 'El nombre del responsable es obligatorio.',

            'technological_equipment_id.required' => 'El nombre del equipo tecnológico es obligatorio.',
        ];
    }








}
