<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'     => 'required|max:225',
            'password'  => 'required|max:225',
        ];
    }
    public function messages()
    {
        return [
            'required'  => 'لا يجب ترك خانة :attribute فارغة',
            'max'       => 'لا يجب زياده عدد الحروف عن 225 حرف',
        ];
    }
}
