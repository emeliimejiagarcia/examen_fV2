<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class VendorRequest extends FormRequest
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
            'point_contact'=> 'required|string|min:5|max:255',
            'phone_number'=> ['required', 'string', 'min:8', Rule::unique('vendors')->ignore($this->vendor)],
            'mail'=> ['required','string', 'max:255', Rule::unique('vendors')->ignore($this->vendor)],
            'delivered_products'=> 'required|integer|min:1',
            'warranty'=> 'required|string|min:5|max:255',
            'address'=> 'required|string|min:10|max:255',
            'department'=> 'required|string|min:3|max:20',
            'age'=> 'required|string|max:3',
            'identity_card'=> ['required','string', 'max:18', Rule::unique('vendors')->ignore($this->vendor)],
            'authorization_file' => 'nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'
        ];

    }
    public function messages()
    {
        return[
            'name.required' => 'El nombre del proveedor es obligatorio.',
            'name.string' => 'El nombre del proveedor debe tener solo carácteres.',
            'name.min' => 'El nombre del proveedor debe tener al menos 5 cáracteres.',
            'name.max' => 'El nombre del proveedor tiene un máximo de 255 cáracteres.',

            'point_contact.required' => 'El nombre del punto de contacto es obligatorio.',
            'point_contact.string' => 'El nombre del punto de contacto debe tener solo carácteres.',
            'point_contact.min' => 'El nombre del punto de contacto debe tener al menos 5 cáracteres.',
            'point_contact.max' => 'El nombre del punto de contacto tiene un máximo de 255 cáracteres.',

            'phone_number.required' => 'El número es requerido.',
            'phone_number.string' => 'El número de teléfono debe tener solo carácteres.',
            'phone_number.min' => 'El número de teléfono debe tener al menos 8 cáracteres.',
            'phone_number.unique' => 'El número de teléfono ya está en uso.',

            'mail.required' => 'El correo electrónico es obligatorio.',
            'mail.string' => 'El correo electrónico debe tener solo carácteres.',
            'mail.max' => 'El correo electrónico tiene un máximo de 255 cáracteres.',
            'mail.unique' => 'El correo electrónico ya está en uso.',

            'delivered_products.required' => 'La cantidad de productos entregados son obligatorios.',
            'delivered_products.integer' => 'La cantidad de productos entregados debe ser un número.',
            'delivered_products.min' => 'La cantidad de productos entregados debe ser al menos 1.',

            'warranty.required' => 'La garantía es obligatoria.',
            'warranty.string' => 'La garantía debe tener solo carácteres.',
            'warranty.min' => 'La garantía debe tener al menos 5 cáracteres.',
            'warranty.max' => 'La garantía tiene un máximo de 255 cáracteres.',

            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe tener solo carácteres.',
            'address.min' => 'La dirección debe tener al menos 10 cáracteres.',
            'address.max' => 'La dirección tiene un máximo de 255 cáracteres.',

            'department.required' => 'El departamento es obligatorio.',
            'department.string' => 'El departamento debe tener solo carácteres.',
            'department.min' => 'El departamento debe tener al menos 3 cáracteres.',
            'department.max' => 'el departamento tiene un máximo de 20 cáracteres.',

            'age.required' => 'La edad es obligatoria.',
            'age.string' => 'La edad solo debe se permiten números.',
            'age.max' => 'La edad no puede exceder los 3 dígitos.',

            'identity_card.required' => 'La cédula de identidad es obligatoria.',
            'identity_card.string' => 'La cédula de identidad debe tener solo carácteres.',
            'identity_card.max' => 'La cédula de identidad tiene un máximo de 18 cáracteres.',
            'identity_card.unique' => 'La cédula de identidad ya existe.',

            'authorization_file.required' => 'La autorización es obligatoria.',
            'authorization_file.file' => 'La autorización debe ser un archivo válido.',
            'authorization_file.mimes' => 'La autorización debe estar en formato PDF, JPG o PNG.',
            'authorization_file.max' => 'La autorización no debe superar los 2MB.',



        ];
    }
}
