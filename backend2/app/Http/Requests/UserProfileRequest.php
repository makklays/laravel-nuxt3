<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'id_code' => 'required|string|max:255',
            'birthday' => 'required',
            'id_photo' => 'required',
            'interests' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'country.required' => 'Country is required',
            'address.required' => 'Address is required',
            'postcode.required' => 'Postcode is required',
            'id_code.required' => 'ID Code is required',
            'birthday.required' => 'Birthday is required',
            'id_photo.required' => 'ID Photo is required',
            'interests.required' => 'Interests is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ];
    }
}

