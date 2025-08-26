<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ResponsibleRequest extends FormRequest
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
            'name'=> 'required|string|min:5|max:255',
            'age'=> 'required|integer|max:3',
            'mail'=> ['required','string', 'max:255', Rule::unique('responsibles')->ignore($this->responsible)],
            'identity_card'=> ['required','string', 'max:18', Rule::unique('responsibles')->ignore($this->responsible)],
            'phone_number'=> ['required','nullable','string', 'max:15', Rule::unique('responsibles')->ignore($this->responsible)],
            'departament'=> 'required|string|min:5|max:255',
            'gender'=> 'required|string|min:5|max:12',
            'nationality'=> 'required|string|min:5|max:255',
            'address'=> 'required|string|min:10|max:255',
            'academic_role'=> 'required|string|min:10|max:255',
            'registration_date'=> 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre completo es obligatorio.',
            'name.string' => 'El campo de nombre completo debe tener solo carácteres.',
            'name.min' => 'El campo de nombre completo debe tener al menos 5 cáracteres.',
            'name.max' => 'El campo de nombre completo tiene un máximo de 255 cáracteres.',

            'age.required' => 'La edad es obligatoria.',
            'age.integer' => 'La edad solo debe se permiten números.',
            'age.max' => 'La edad no puede exceder los 3 dígitos.',

            'mail.required' => 'El correo electrónico es obligatorio.',
            'mail.string' => 'El correo electrónico debe tener solo carácteres.',
            'mail.max' => 'El correo electrónico tiene un máximo de 255 cáracteres.',
            'mail.unique' => 'El correo electrónico ya está en uso.',

            'identity_card.required' => 'La cédula de identidad es obligatoria.',
            'identity_card.string' => 'La cédula de identidad debe tener solo carácteres.',
            'identity_card.max' => 'La cédula de identidad tiene un máximo de 18 cáracteres.',
            'identity_card.unique' => 'La cédula de identidad ya existe.',

            'phone_number.required' => 'El número de teléfono es obligatorio.',
            'phone_number.string'=> 'El número de teléfono debe tener solo carácteres.',
            'phone_number.max' => 'El número de teléfono tiene un máximo de 15 cáracteres.',
            'phone_number.unique' => 'El número de teléfono ya está en uso.',

            'departament.required' => 'El departamento es obligatorio.',
            'departament.string' => 'El nombre del departamento debe tener solo carácteres.',
            'departament.min' => 'El nombre del departamento debe tener al menos 5 cáracteres.',
            'departament.max' => 'El nombre del departamento tiene un máximo de 255 cáracteres.',

            'gender.required' => 'El género es obligatorio.',
            'gender.string' => 'El género debe tener solo carácteres.',
            'gender.min' => 'El género debe tener al menos 5 cáracteres.',
            'gender.max' => 'El género tiene un máximo de 12 cáracteres.',

            'nationality.required' => 'La nacionalidad es obligatoria.',
            'nationality.string' => 'La nacionalidad debe tener solo carácteres.',
            'nationality.min' => 'La nacionalidad debe tener al menos 5 cáracteres.',
            'nationality.max' => 'La nacionalidad tiene un máximo de 255 cáracteres.',

            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe tener solo carácteres.',
            'address.min' => 'La dirección debe tener al menos 10 cáracteres.',
            'address.max' => 'La dirección tiene un máximo de 255 cáracteres.',

            'academic_role.required' => 'El rol académico es obligatorio.',
            'academic_role.string' => 'El rol académico debe tener solo carácteres.',
            'academic_role.min' => 'El rol académico debe tener al menos 10 cáracteres.',
            'academic_role.max' => 'El rol académico tiene un máximo de 255 cáracteres.',

            'registration_date.required' => 'La fecha de registro es obligatoria.',
            'registration_date.date' => 'La fecha de registro debe ser una fecha válida.',

        ];
    }
}
